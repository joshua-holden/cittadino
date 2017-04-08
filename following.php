<?php 
require 'functions.php';
$activePage = "following";
include("dashheader.php");
$userid = $_SESSION['curuserid'];
$following = getFollowing($userid);

        foreach ($following as $id){
            //echo '<a href="userdash.php" class="browse">';

            if(rel_exists($userid, $id) != 0){
            $un = getUNfromID($id);
            echo '<div class="follower">';
            echo '<h2>' . $un . '</h2>';
            echo '<img class="follower" src="' . getImage($un) . '"/>';
            echo "<h6>" . getFirstname($un) . " " . getLastname($un) . "</h6>";
            echo '</div>';
            }
        }

        
        
            
 include("footer.php");?>