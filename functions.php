<?php

function user_exists($username){
    try {
    $db = new PDO("mysql:dbname=cittadino", "root", "root");
    $q = $db->query("SELECT COUNT(id) FROM users WHERE username = '$username'")->fetchColumn();
    } catch (Exception $e) {
      var_dump($e);
      die;
    }
    return $q;
    //return $res;
}

function password_match($username){
        try {
    $db = new PDO("mysql:dbname=cittadino", "root", "root");
    $q = $db->query("SELECT password FROM users WHERE username = '$username'")->fetchColumn();
    } catch (Exception $e) {
      var_dump($e);
      die;
    }
    return $q;
}

function getImage($username){
    try {
        $db = new PDO("mysql:dbname=cittadino", "root", "root");
        $q = $db->query("SELECT image FROM users WHERE username = '$username'")->fetchColumn();
    } catch (Exception $e) {
      var_dump($e);
      die;
    }
    return $q;
}

function getFirstname($username){
    try {
        $db = new PDO("mysql:dbname=cittadino", "root", "root");
        $q = $db->query("SELECT firstname FROM users WHERE username = '$username'")->fetchColumn();
    } catch (Exception $e) {
      var_dump($e);
      die;
    }
    return $q;
}

function getLastname($username){
    try {
        $db = new PDO("mysql:dbname=cittadino", "root", "root");
        $q = $db->query("SELECT lastname FROM users WHERE username = '$username'")->fetchColumn();
    } catch (Exception $e) {
      var_dump($e);
      die;
    }
    return $q;
}

function getUsers(){
    $db = new PDO("mysql:dbname=cittadino", "root", "root");
    $sth = $db->prepare("SELECT username FROM users");
    $sth->execute();
    $result = $sth->fetchAll(PDO::FETCH_COLUMN, 0);
    return $result;
}
?>
