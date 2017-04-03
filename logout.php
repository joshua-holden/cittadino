<?php

$_SESSION['active'] = 0;
$_SESSION['curuser'] = '';
session_destroy();
header("Location:index.php");