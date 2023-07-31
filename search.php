<?php 
    session_start();
    include 'dbcon.php';
    if (isset($_SESSION['pid']))
    {
        echo "Hi";
    }
    else
    {
        $_SESSION['prid']=1;
    }
?><!DOCTYPE html>
<html>
    <head>
        <title>Srkr Hub</title>
        <link rel="stylesheet" href="styles/search.css">
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
        <?php
            $sql="select * from projects where pid=".$_SESSION['prid'].";";
            $presults=mysqli_query($conn,$sql);
            $pres=mysqli_fetch_assoc($presults);
        ?>
        <div class="content">
            <div class="mainbox">
                    <center><h1>Search Projects</h1></center>
                    <div class="formbox">
                        <form action="search.php" method="post">
                            <input type="text" placeholder="Enter any keywords" name="stext">
                            <div class="logs"><button type="submit">Search</button></div>
                        </form>
                        <div class="details">
                            <?php if(isset($_POST['stext']))
                            {
                            ?>
                                <label>Search Results</label>
                                <table>
                                    <tr>
                                        <th>Project ID</th>
                                        <th>Project Title</th>
                                        <th>Project Branch</th>
                                        <th>Project Link</th>
                                    </tr>
                                    <?php
                                        $stext=$_POST['stext'];
                                        $sql="select * from projects where concat(ptitle,stdbranch,pmbranch,pdesc,stdname,pmname) like '%$stext%';";
                                        $sres=mysqli_query($conn,$sql);
                                        if((mysqli_num_rows($sres))>0)
                                        {
                                            while($row = mysqli_fetch_assoc($sres))
                                            {
                                                ?>
                                                <tr>
                                                    <td><center><?php echo $row['pid']; ?></center></td>
                                                    <td><center><?php echo $row['ptitle']; ?></center></td>
                                                    <td><center><?php echo $row['stdbranch']; ?></center></td>
                                                    <td style="background-color: #0e1116;"><center><div class="clickbtn"><form action="prredirect.php" method="post"><button value=<?php echo $row['pid']; ?> name="prid">Click here</button></form></div></center></td>

                                                </tr>
                                                <?php
                                                
                                            }
                                        }
                                    ?>
                                <?php
                            }
                            else
                            {
                                echo "<h1>SRKR Hub  </h1>";
                            }
                            ?>
                            </table>
                        </div>
                    </div>
            </div>
        </div>
    </body>
</html>