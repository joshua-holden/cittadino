<?php 
$activePage = "signup";
include("header.php");
?>
        <h2>Become A Citizen</h2>

        <form action="signup_handler.php" method="post">

            <div>
                
                <input type="text" placeholder="Username" name="username"  pattern="[\w]{2,}" title="Usernames must be at least 2 characters long and can contain alphanumeric characters and '_'." maxlength="32" required>
                
                <input type="text" placeholder="First Name" name="firstname" maxlength="32" required>
                
                <input type="text" placeholder="Last Name" name="lastname" maxlength="32" required>
                
                <input type="text" placeholder="Email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$"  title="Email must have format john@domain.com" required>
                
                <input type="password" placeholder="Password" name="password" pattern="(?=.*\d)(?=.*[a-zA-Z]).{6,}"  title="Passwords must be at least 6 characters long and contain at least one number." maxlength="64" required>
        
                <input class="buttoning" type="submit" name="signup_btn" value="Sign Up">
                <?php
                    session_start();
                    if(!empty($_SESSION['error'])) {
                        echo $_SESSION['error']; 
                    } 
                ?>
                <?php unset($_SESSION['error']); ?>
            </div>
                    
        
        </form>
        
<?php include("footer.php");?>