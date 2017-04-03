<?php
    session_start();
    require 'functions.php';

    $oldusername = $_SESSION['curuser'];
    if (isset($_POST['change_btn'])) {
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $image = $_FILES["myimage"]["name"];
        $imagepath = "user_images/" . $_FILES["myimage"]["name"];

    try {
  
        $db = new PDO('mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580', "ba97daeb49e80a", "64bc3afe");
        if($username != ''){
            $sql = "UPDATE users SET username='$username' WHERE username='$oldusername'";
            $stmt = $db->prepare($sql);
        
            if (user_exists($username) > 0){
                $_SESSION['error'] = "Username taken, choose another.";
                //header("Location:profile.php");
            }else{
                $stmt->execute();
                $_SESSION['curuser'] = $username;
                //header("Location:profile.php");
            }
        }

        if($firstname != ''){
            $cuser = $_SESSION['curuser'];
            $sql = "UPDATE users SET firstname='$firstname' WHERE username='$cuser'";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $_SESSION['curuser'] = $cuser;
            //header("Location:profile.php");
        }
        
        if($lastname != ''){
            $cuser = $_SESSION['curuser'];
            $sql = "UPDATE users SET lastname='$lastname' WHERE username='$cuser'";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $_SESSION['curuser'] = $cuser;
            //header("Location:profile.php");
        }
        
        if($email != ''){
            $cuser = $_SESSION['curuser'];
            $sql = "UPDATE users SET email='$email' WHERE username='$cuser'";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $_SESSION['curuser'] = $cuser;
            //header("Location:profile.php");
        }

        if($password != ''){
            $cuser = $_SESSION['curuser'];
            $sql = "UPDATE users SET password='$password' WHERE username='$cuser'";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $_SESSION['curuser'] = $cuser;
            //header("Location:profile.php");
        }
        
        if($image != ''){

            $cuser = $_SESSION['curuser'];
            $sql = "UPDATE users SET image='$imagepath' WHERE username='$cuser'";
            $stmt = $db->prepare($sql);
            $stmt->execute();
            $_SESSION['curuser'] = $cuser;
            move_uploaded_file($_FILES["myimage"]["tmp_name"], "user_images/" . $_FILES["myimage"]["name"]);
            //header("Location:profile.php");
        }

        header("Location:profile.php");
        
    }catch (Exception $e) {
        echo "asdf";
        var_dump($e);
        die;
    }
   }

?>