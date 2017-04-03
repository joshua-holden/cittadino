<?php 
$activePage = "signup";
include("header.php");
?>
        <h2>Become A Citizen</h2>

        <form action="signup_handler.php" method="post">

            <div>
                
                <input type="text" placeholder="Username" name="username" required>
                
                <input type="text" placeholder="First Name" name="firstname" required>
                
                <input type="text" placeholder="Last Name" name="lastname" required>
                
                <input type="text" placeholder="Email" name="email" required>
                
                <input type="password" placeholder="Password" name="password" required>
        
                <input class="buttoning" type="submit" name="signup_btn" value="Sign Up">
            </div>
                    
        
        </form>
        
<?php include("footer.php");?>