<!DOCTYPE html>
<head>
    <title>
        Sign up
    </title>
    <link rel="stylesheet" href="styles/signup.css">
</head>
<body background="images/back_ground.png">
        <div class="main_box">
            <center>
                <img src="images/logo_login.png">
                <h1>Sign Up</h1>
                <form method="POST" action="sign_up_auth.php">
                    <div class="inpts"><input type="text" name="sname" placeholder="Enter your name"></div>
                    <div class="inpts"><input type="text" name="srgno" placeholder="Enter your Student ID"></div>
                    <div class="inpts"><input type="email" name="smail" placeholder="Enter your Email"></div>
                    <div class="inpts"><input type="password" name="spass" placeholder="Enter password"></div>
                    <div class="inpts"><input type="password" name="spass2" placeholder="Confirm your password"></div>
                    <div class="logs"><button type="submit"><a href="login.html">SignUp</a></button></div>
                    <div class="forg"><label><a href="login.php">Already have an account ? Login Here.</a></label></div>
                </form>
            </center>
        </div>
</body>