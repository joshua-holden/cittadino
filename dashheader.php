<?php
    session_start();
      if($_SESSION['active'] == 0){ 
      header("Location: login.php");
      }
?>

<! DOCTYPE html>
<html>

    <head>
        <title>Cittadino User Dashboard</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" href="megaphone-icon-301.png" type="image/gif" sizes="16x16">
    </head>
    <body>
    
        <header>
            <a href="userdash.php"><img src="cittadino-icon.png"/></a>
            <ul>
                <li><a href="logout.php">Log Out</a></li>
            </ul>
        </header>
        
        
        <ul>
            <li>
                <a href="userdash.php" 
                   <?php if ($activePage == "userdash") {?> 
                       class="current"; 
                   <?php } ?>>
                    Dashboard
                </a>
            </li>

            <li><a href="profile.php"
                   <?php if ($activePage == "profile") {?> 
                       class="current"; 
                   <?php } ?>>
                    Profile
                </a>
            </li>
            
            <li>
                <a href="browse.php" 
                   <?php if ($activePage == "browse") {?> 
                       class="current"; 
                   <?php } ?>>
                    Browse Users
                </a>
            </li>
            
            <li><a href="following.php"
                   <?php if ($activePage == "following") {?> 
                       class="current"; 
                   <?php } ?>>
                    Following
                </a>
            </li>
            <li><a href="followers.php"
                   <?php if ($activePage == "followers") {?> 
                       class="current"; 
                   <?php } ?>>
                    Followers
                </a>
            </li>
        </ul>