<?php
    session_start();
    if (isset($_SESSION['id'])){
        session_destroy();
    }
?>


<!DOCTYPE html>
<head>
    <title>
        Srkr Hub
    </title>
    <link rel="stylesheet" href="styles/login.css">
</head>
<body background="images/back_ground.png">
            <div class="main_box">
                <center>
                    <img src="images/logo_login.png">
                    <h1>Sign in to srkr hub</h1>
                    <form action="auth.php" method="POST">
                        <div class="inpts"><input type="email" name='smail' placeholder="Enter your Email"></div><br>
                        <div class="inpts"><input type="password" name="spass" placeholder="Enter password"><br></div>
                        <div class="forg"><label><a href="">Forgot your password ?</a></label></div><br>
                        <div class="logs"><button type="submit">Submit</button></div>
                        <div class="forg"><label><a href="signup.php">Don't have an account? Register Here.</a></label></div>
                    </form>
                </center>
            </div>
</body>