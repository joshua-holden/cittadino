<?php 
require 'functions.php';
$activePage = "browse";
include("dashheader.php");
$user = $_SESSION['curuser'];
$users = getUsers();

        foreach ($users as $x){
            //echo '<a href="userdash.php" class="browse">';

            echo '<div class="follower">';
            echo '<h2>' . $x . '</h2>';
            echo '<img class="follower" src="' . getImage($x) . '"/>';
            echo "<h6>" . getFirstname($x) . " " . getLastname($x) . "</h6>";
            echo '<button id="follow_btn" name="follow_btn" type="submit" formaction="browse.php">Follow</button>';
            echo '</div>';
            
        }

        
        
            
 include("footer.php");?>
