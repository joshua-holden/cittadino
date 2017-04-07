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

        <?php
            $db = new PDO('mysql:host=us-cdbr-iron-east-04.cleardb.net;dbname=heroku_e35f1229d52c580', "ba97daeb49e80a", "64bc3afe"); 


        ?>
        <div id="prof" class="follower">
            <img class="follower" src="<?php echo $image; ?>"/>
               <?php echo "<h4>" . $user . "</h4>"; ?>
               <?php echo "<h6>" . $fName . " " . $lName . "</h6>"; ?>
        </div>

        <div class="profile">

        <form class="profile" action="profile_handler.php" method="post" enctype='multipart/form-data'>

            <div>

                <input type="text" placeholder="Edit Username" name="username" pattern="[\w]{2,}" title="Usernames must be at least 2 characters long and can contain alphanumeric characters and '_'." maxlength="32">

                <input type="text" placeholder="Edit First Name" name="firstname" pattern="[\w]{1,}" title="Must enter at least one alphanumeric character." maxlength="32">

                <input type="text" placeholder="Edit Last Name" name="lastname" pattern="[\w]{1,}" title="Must enter at least one alphanumeric character." maxlength="32">

                <input type="text" placeholder="Edit Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  title="Email must have format john@domain.com">

                <input type="password" placeholder="Edit Password" name="password" pattern="(?=.*\d)(?=.*[a-zA-Z]).{6,}"  title="Passwords must be at least 6 characters long and contain at least one number." maxlength="64">

                <input type='file' name='myimage'>

                <input class="buttoning" type="submit" name="change_btn" value="Submit Changes">
            </div>
            <?php if(!empty($_SESSION['error'])) { echo $_SESSION['error']; } ?>
            <?php unset($_SESSION['error']); ?>


        </form>
        </div>

<?php include("footer.php");?>
