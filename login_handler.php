<?php

require 'functions.php';

  if (isset($_POST["login_btn"])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if (user_exists($username) > 0){
        if (password_match($username) == $password){
            session_start();
            $_SESSION['active'] = 1;
            $_SESSION['curuser'] = $username;
            header("Location:userdash.php");
        }else{
            echo 'password wrong';
        }

    }else{
        echo 'user not found';
    }  
  }
?>