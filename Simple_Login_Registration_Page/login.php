<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <title>Login</title>
</head>
<body>
    <h2>LogIn</h2>
    <hr>
    <form class="container" action="login.php">
        <div class="uname">
            <label for="Username">Username</label>
            <input type="text" id="Username" value="uname" name="uname" placeholder="Enter your username">
        </div>
        <div class="upass">
            <label for="Password">Password</label>
            <input type="password" id="Password" value="upass" name="upass" placeholder="Enter your password">
        </div>
        <input class="sub-btn" type="submit" name="submit" value="submit">

        
    </form>
</body>
</html>