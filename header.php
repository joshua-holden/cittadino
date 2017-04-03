<! DOCTYPE html>
<html>

    <head>
        <title>Cittadino Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="icon" href="megaphone-icon-301.png" type="image/gif" sizes="16x16">
    </head>
    <body>
    
        <header>
            <a href="index.php"><img src="cittadino-icon.png"/>
            </a>
            <ul>
                <li><a href="signup.php"
                       <?php if ($activePage == "signup") {?> 
                       class="current"; 
                   <?php } ?>>
                    Become A Citizen
                    </a>
                </li>
                <li><a href="login.php"
                       <?php if ($activePage == "login") {?> 
                       class="current"; 
                   <?php } ?>>
                    Log In
                    </a>
                </li>
            </ul>
        </header>