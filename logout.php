<?php
    session_start();
    $_SESSION['active'] = 0;
    $_SESSION['curuser'] = '';
    session_unset();
    session_destroy();
    header("Location:index.php");
    exit();