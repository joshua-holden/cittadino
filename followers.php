<?php 
require 'functions.php';
$activePage = "followers";
include("dashheader.php");
$userid = $_SESSION['curuserid'];
$followers = getFollowers($userid);

        foreach ($followers as $id){
            //echo '<a href="userdash.php" class="browse">';
            $un = getUNfromID($id);
            echo '<div class="follower">';
            echo '<h2>' . $un . '</h2>';
            echo '<img class="follower" src="' . getImage($un) . '"/>';
            echo "<h6>" . getFirstname($un) . " " . getLastname($un) . "</h6>";
            echo '</div>';
            
        }

        
        
            
 include("footer.php");?>