<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Srkr Hub</title>
        <link rel="stylesheet" href="styles/index.css">
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
                            <?php
                            if(isset($_SESSION['id']))
                            {
                                echo "Logout";
                            }
                            else{echo "Login";};
                            ?>
                            </a></li>
                    </ul>
                </div>
            
        </nav>
        <div class="content">
            <center>
                <?php 
                if(isset($_SESSION['id']))
                {
                    echo "<h1>Welcome, ".$_SESSION['name']."</h1>.
                    
                    <br>
                    <p>
                    <div class='logs'><a href='search.php'><button type='button'>Search project</button></a>   
                   

                        
                    <a href='project_up.php'><button type='button'>Upload project</button></a></div>
                    </p>
                    ";
                }
                else 
                { 
                    echo "<h1>Please login to access the resources.</h1>";
                    
                    };
                    ?>
            </center>
        </div>
    </body>
</html>