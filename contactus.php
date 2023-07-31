<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Srkr Hub</title>
        <link rel="stylesheet" href="styles/contactus.css">
    </head>
    <body bgcolor="#0e1116">
        <nav>
            
                <div class="logo">
                    <img src="images/logo_main.png",alt="logo">
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="mentors.php">Mentors</a></li>
                        <li><a href="projects.php">Projects</a></li>
                        <li><a href="contactus.php">Contact us</a></li>
                        <li><a href="dashboard.php">Dashboard</a></li>
                        <li><a href="">Profile</a></li>
                        <li><a href="">|</a></li>
                        <li><a href="login.php">
                        <?php if(isset($_SESSION['id'])){ echo "Logout";}
                        else{ echo "Login";};
                        ?></a></li>
                    </ul>
                </div>
            
        </nav>
        <div class="content">
            <div class="leftpart">
                <img src="images/contact.png">
            </div>
            <div class="rightpart">
                <h1>Contact Us</h1>
                <div class="details">
                    <div class="detbtn">
                        <h2>Location</h2>
                        <p>S.R.K.R. Engineering College (AUTONOMOUS), SRKR MARG, China amiram, Bhimavaram - 534204, AP, INDIA</p>
                    </div>
                    <div class="detbtn">
                        <h2>Phone</h2>
                        <p>08816-223332<br>9848823332, 9848381818</p>
                    </div>
                    <div class="detbtn">
                        <h2>Email</h2>
                        <p>principal@srkrec.ac.in</p>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>