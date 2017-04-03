<?php
    $db = new PDO("mysql:dbname=cittadino", "root", "root");
    $sth = $db->prepare("SELECT username FROM users");
    $sth->execute();
    $result = $sth->fetchAll();
?>