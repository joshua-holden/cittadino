<?php

require 'functions.php';

  if (isset($_POST["change_btn"])) {
      $username = $_POST['username'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $image = $_POST['myimage'];

    try {
        $db = new PDO('mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580', "ba97daeb49e80a", "64bc3afe");
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "UPDATE users SET lastname='Doe' WHERE id=2";
        $stmt = $db->prepare($sql);
        $stmt->execute();
        if (user_exists($username) > 0){
            header("Location:signup.php");
        }else{
            $db->exec($sql);
            session_start();
            $_SESSION['active'] = 1;
            $_SESSION['curuser'] = $username;
            header("Location:userdash.php");
    }
    }catch (Exception $e) {
      var_dump($e);
      die;
    }
   }

?>