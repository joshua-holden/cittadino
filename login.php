<?php 
$activePage = "login";
include("header.php");
?>
        
        <h2>Login</h2>

        <form action="login_handler.php" method="post">

            <div>
                
                <input type="text" placeholder="Username" name="username" required>

                
                <input type="password" placeholder="Password" name="password" required>
        
                <input class="buttoning" type="submit" name="login_btn" value="Log In">
            </div>
        


        
        </form>
        
<?php include("footer.php");?>