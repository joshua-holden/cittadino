<?php 
require 'functions.php';
$activePage = "profile";
include("dashheader.php");
$user = $_SESSION['curuser'];
$fName = getFirstname($user);
$lName = getLastname($user);
$image = getImage($user);
?>

        <h2>Edit Profile</h2>
        
        <?php $db = new PDO("mysql:dbname=cittadino", "root", "root"); 
            $uname = $db->query("SELECT username FROM users WHERE id = 30");
            
        ?>
        <div id="profile" class="follower">
            <img class="follower" src="<?php echo $image; ?>"/>
               <?php echo "<h4>" . $user . "</h4>"; ?>
               <?php echo "<h6>" . $fName . " " . $lName . "</h6>"; ?>
        </div>
        
        <div class="profile">
        
        <form class="profile" action="profile_handler.php">

            <div>
                
                <input type="text" placeholder="Edit Username" name="username">

                <input type="text" placeholder="Edit First Name" name="first">
                
                <input type="text" placeholder="Edit Last Name" name="lastname">
                
                <input type="text" placeholder="Edit Email" name="email">
                
                <input type="password" placeholder="Edit Password" name="password">
                
                <input type='file' name='myimage'>
        
                <input class="buttoning" type="submit" name="change_btn" value="Submit Changes">
            </div>
        
        
        </form>
        </div>
        
<?php include("footer.php");?>