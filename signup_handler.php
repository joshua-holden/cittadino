<?php

require 'functions.php';

  if (isset($_POST["signup_btn"])) {
      $username = $_POST['username'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $password = $_POST['password'];

    try {
      $db = new PDO("mysql:dbname=cittadino", "root", "root");
        $sql = "INSERT INTO users (username, firstname, lastname, email, password) "
            . "VALUES('$username', '$firstname', '$lastname', '$email', '$password')";
        if (user_exists($username) > 0){
            header("Location:signup.php");
        }else{
            $db->exec($sql);
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
