<?php require_once("index.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Include/CSS/Styles.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="icon">
            <img src="Images/login(3).png" alt="">
            <p> Or LogIn With</p>
        </div>
        <div class="social">
            <img src="Images/github.png" alt="">
            <img src="Images/google.png" alt="">
            <img src="Images/facebook.png" alt="">
        </div>
        <form action="login.php" method="post">
            <div class="signup"><p>SIGN IN</p></div>

            <div>
                <input type="text" required>
            <label for="">Username</label>
            </div>
            
            <div>
            <input type="password" required>
            <label for="">Password</label> 
            </div>

            <input type="submit" value="Log In &rarr;">
        </form>
    </div>
</body>
</html>