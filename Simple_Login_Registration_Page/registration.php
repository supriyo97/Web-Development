<?php require_once ("index.php");?>
<!-- <?php require_once "Include/CSS/Styles.css";?> -->
<?php require_once ("Include/Session.php");?>
<?php

if (isset($_POST["submit"])){
    $username = mysqli_real_escape_string($conn,$_POST["username"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $phone = mysqli_real_escape_string($conn,$_POST["phn"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    $cpassword = mysqli_real_escape_string($conn,$_POST["cpassword"]);

    if(empty($username) && empty($email) && empty($phone) && empty($password) && empty($cpassword)){
        $_SESSION["message"] = "All fields must be filled up";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Include/CSS/Styles.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400" rel="stylesheet">
    <script
			  src="https://code.jquery.com/jquery-3.3.1.js"
			  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
			  crossorigin="anonymous">
    </script>
    <title>Sign Up</title>
</head>
<body>
    <div class="container">
        <div class="icon">
            <img src="Images/login(3).png" alt="">
            <p>Already Have an Account?<a href="login.html">Sign In</a></p>
        </div>
        <div><p class="Or">Or Use</p></div>
        <div class="social">
            <img src="Images/github.png" alt="">
            <img src="Images/google.png" alt="">
            <img src="Images/facebook.png" alt="">
        </div>
        <form action="registration.php" method="post" id="reg_form">

            <div class="signup"><p>SIGN UP</p></div>
            <!-- <div><?php echo msg(); ?></div> -->
            <div>
                <div><small id="error_uname"></small></div>
                <input type="text" id="uname" name = "username" required="">
                
                <label for="">Username</label>
                
            </div>
            
            
            <div>
                <input type="email" id="email" name = "email" required>
                <span id="error_email"></span>
                <label for="">Email</label>
            </div> 
            
            <div>
                <input type="number" id="phn" name = "phn" required>
                <span id="error_phn"></span>
                <label for="">Mobile No.</label> 
            </div>

            <div>
            <input type="password" id="password" name = "password" required>
            <span id="error_pass"></span>
            <label for="">Password</label> 
            </div>

            <div>
            <input type="password" id="cpassword" name = "cpassword" required>
            <span id="error_cpass"></span>
            <label for="">Confirm Password</label> 
            </div>
            <input type="submit" name="submit" value="Create Account &rarr;">
        </form>
    </div>
    
    <script type="text/javascript">
        $(function(){
            $('#error_uname').hide();
            $('#error_email').hide();
            $('#error_phn').hide();
            $('#error_pass').hide();
            $('#error_cpass').hide();

            var err_uname=false;
            var err_email=false;
            var err_phn=false;
            var err_pass=false;
            var err_cpass=false;
            
            $("#uname").focusout(function() {
                check_uname();
            });
            $("#email").focusout(function() {
                check_email();
            });
            $("#phn").focusout(function() {
                check_phone();
            });
            $("#password").focusout(function() {
                check_pass();
            });
            $("#cpassword").focusout(function() {
                check_cpass();
            });

            function check_uname() {
                var pattern = /^[a-zA-z]*$/;
                var uname = $("#uname").val();
                if(pattern.test(uname) && uname !== ''){
                    $('#error_uname').hide();
                    $("#uname").css("border-bottom","2px solid dodgerblue");
                }else{
                    $('#error_uname').html("Should contain only Characters");
                    $('#error_uname').show();
                    $("#uname").css("border-bottom","2px solid #F90A0A");
                    err_uname = true;
                }
            }
        });

    </script>

    <!-- <script type="text/javascript">
    function check(){
        var input = document.getElementById("uname");
        var form = document.getElementById("reg_form");
        var err = document.getElementById("error_uname");

        var elem           = document.createElement('div');
        elem.id            = 'notify';
        elem.style.display = 'none';
        form.appendChild(elem);

        input.addEventListener('invalid', function(event){
            event.preventDefault();
            if ( ! event.target.validity.valid ) {
                err.textContent   = 'Username should only contain lowercase letters e.g. john';
                
                err.style.display = 'block';
        
                input.className   = 'invalid shake';
        }
    });
        input.addEventListener('input', function(event){
            if ( 'block' === err.style.display ) {
                input.className = '';
                err.style.display = 'none';
            }
        });
    }
    </script> -->
</body>
</html>