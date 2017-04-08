<?php

    function user_exists($username){
        try {
            $db = new PDO("mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580", "ba97daeb49e80a", "64bc3afe");
            $q = $db->query("SELECT COUNT(id) FROM users WHERE username = '$username'")->fetchColumn();
        } catch (Exception $e) {
            var_dump($e);
            die;
        }
        
        return $q;
    }

    function password_match($username){
        try {
            $db = new PDO("mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580", "ba97daeb49e80a", "64bc3afe");
            $q = $db->query("SELECT password FROM users WHERE username = '$username'")->fetchColumn();
        } catch (Exception $e) {
            var_dump($e);
            die;
        }
        return $q;
    }

    

    function getImage($username){
        try {
            $db = new PDO("mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580", "ba97daeb49e80a", "64bc3afe");
            $q = $db->query("SELECT image FROM users WHERE username = '$username'")->fetchColumn();
        } catch (Exception $e) {
            var_dump($e);
            die;
        }
        return $q;
    }

    function getFirstname($username){
        try {
            $db = new PDO("mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580", "ba97daeb49e80a", "64bc3afe");
            $q = $db->query("SELECT firstname FROM users WHERE username = '$username'")->fetchColumn();
        } catch (Exception $e) {
            var_dump($e);
            die;
        }
        return $q;
    }

    function getLastname($username){
        try {
            $db = new PDO("mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580", "ba97daeb49e80a", "64bc3afe");
            $q = $db->query("SELECT lastname FROM users WHERE username = '$username'")->fetchColumn();
        } catch (Exception $e) {
            var_dump($e);
            die;
        }
        return $q;
    }

    function getID($username){
        try {
            $db = new PDO("mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580", "ba97daeb49e80a", "64bc3afe");
            $q = $db->query("SELECT id FROM users WHERE username = '$username'")->fetchColumn();
        } catch (Exception $e) {
            var_dump($e);
            die;
        }
        return $q;
    }

    function getUNfromID($id){
        try {
            $db = new PDO("mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580", "ba97daeb49e80a", "64bc3afe");
            $q = $db->query("SELECT username FROM users WHERE id = '$id'")->fetchColumn();
        } catch (Exception $e) {
            var_dump($e);
            die;
        }
        return $q;
    }

    function getUsers(){
        $db = new PDO("mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580", "ba97daeb49e80a", "64bc3afe");
        $sth = $db->prepare("SELECT username FROM users");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_COLUMN, 0);
        return $result;
    }

    function getFollowing($id){
        $db = new PDO("mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580", "ba97daeb49e80a", "64bc3afe");
        $sth = $db->prepare("SELECT follower_id FROM followers WHERE user_id = '$id'");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_COLUMN, 0);
        return $result;
    }

    function getFollowers($id){
        $db = new PDO("mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580", "ba97daeb49e80a", "64bc3afe");
        $sth = $db->prepare("SELECT user_id FROM followers WHERE follower_id = '$id'");
        $sth->execute();
        $result = $sth->fetchAll(PDO::FETCH_COLUMN, 0);
        return $result;
    }

    function rel_exists($uid, $fid){
        try {
            $db = new PDO("mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580", "ba97daeb49e80a", "64bc3afe");
            $q = $db->query("SELECT COUNT(id) FROM followers WHERE user_id = '$uid' AND follower_id = '$fid'")->fetchColumn();
        } catch (Exception $e) {
            var_dump($e);
            die;
        }
        
        return $q;
    }

?>
