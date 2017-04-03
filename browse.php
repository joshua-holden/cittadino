<?php 
require 'functions.php';
$activePage = "browse";
include("dashheader.php");
$user = $_SESSION['curuser'];

$users = getUsers();
$length = count($users);

        foreach ($users as $x){
            echo '<div class="follower">';
            echo '<h2>' . $x . '</h2>';
            $img = getImage($x);
            echo '<img class="follower" src="' . $img . '"/>';
            echo '</div>';
        }

        
        
            
 include("footer.php");?>
