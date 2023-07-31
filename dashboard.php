<?php
    session_start();
    if (isset($_SESSION['id'])){
        session_destroy();
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Srkr Hub</title>
        <link rel="stylesheet" href="styles/dashboard.css">
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
                        <li><a href="login.php"> <?php if(isset($_SESSION['id'])){ echo "Logout";}
                            else{ echo "Login";};
                            ?></a></li>
                    </ul>
                </div>
            
        </nav>
        <div class="content">
            <center>

                    <div class="container">
                        <div class="left">
                            <h2>Student Profile</h2>
                            <p>Name: John Doe</p>
                            <p>Roll Number: 123456</p>
                            <p>Department: Computer Science</p>
                            <p>Email: john.doe@example.com</p>
                            <p>Phone Number: 1234567890</p>
                        </div>
                        <div class="right">
                            <h2>Uploaded Projects</h2>
                            <table>
                                <thead>
                                    <tr>
                                        <th>Project Name</th>
                                        <th>Project Description</th>
                                        <th>Project Link</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Project 1</td>
                                        <td>Description of Project 1</td>
                                        <td><a href="#">Link to Project 1</a></td>
                                    </tr>
                                    <tr>
                                        <td>Project 2</td>
                                        <td>Description of Project 2</td>
                                        <td><a href="#">Link to Project 2</a></td>
                                    </tr>
                                    <tr>
                                        <td>Project 3</td>
                                        <td>Description of Project 3</td>
                                        <td><a href="#">Link to Project 3</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

               </center>
        </div>
    </body>
</html>