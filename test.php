<?php
    $db = new PDO('mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580', "ba97daeb49e80a", "64bc3afe");
    $sth = $db->prepare("SELECT username FROM users");
    $sth->execute();
    $result = $sth->fetchAll();
?>