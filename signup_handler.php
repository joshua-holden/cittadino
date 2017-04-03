<?php

require 'functions.php';

  if (isset($_POST["signup_btn"])) {
      $username = $_POST['username'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $password = $_POST['password'];

    
      
    try {
      $db = new PDO('mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580', "ba97daeb49e80a", "64bc3afe");
        $sql = "INSERT INTO users (username, firstname, lastname, email, password) "
            . "VALUES('$username', '$firstname', '$lastname', '$email', '$password')";
        $stmt = $db->prepare($sql);
        if (user_exists($username) > 0){
            session_start();
            $_SESSION['error'] = "Username taken, choose another.";
            header("Location:signup.php");
        }else{
            $stmt->execute();
            session_start();
            $_SESSION['active'] = 1;
            $_SESSION['curuser'] = $username;
            header("Location:userdash.php");
    }
    } catch (Exception $e) {
      var_dump($e);
      die;
    }
   }

?>
