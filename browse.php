<?php 
require 'functions.php';
$activePage = "browse";
include("dashheader.php");
$user = $_SESSION['curuser'];
$userid = $_SESSION['curuserid'];
$users = getUsers();

        foreach ($users as $x){
            //echo '<a href="userdash.php" class="browse">';
            echo '<div class="follower">';
            echo '<h2>' . $x . '</h2>';
            echo '<h2>' . getID($x) . '</h2>';
            echo '<img class="follower" src="' . getImage($x) . '"/>';
            echo "<h6>" . getFirstname($x) . " " . getLastname($x) . "</h6>";
            if(rel_exists($userid, getID($x)) == 0){
                
            echo '<form id="foll" action="browse.php" method="post">';
            echo '<input id="follow_btn" name="follow_btn' . getID($x) . '"type="submit" Value="Follow">';
            echo '</form>';
            }
            echo '</div>';
            $followid = getID($x);
            
    if (isset($_POST["follow_btn" . $followid]) && (rel_exists($userid, getID($x)) == 0)) {
      $userid = $_SESSION['curuserid'];
      $db = new PDO('mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580', "ba97daeb49e80a", "64bc3afe");
      $sth = $db->prepare("INSERT INTO followers (user_id, follower_id) VALUES('$userid', '$followid')");
      $sth->execute();
        header("Location:browse.php");
  }  
        }
  
        
            
 include("footer.php");?>
