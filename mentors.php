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
        <link rel="stylesheet" href="styles/mentors.css">
	    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
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
                        <li><a href="login.php"><?php if(isset($_SESSION['id'])){ echo "Logout";}
                        else{ echo "Login";};
                        ?></a></li>
                    </ul>
                </div>
            
        </nav>
        <div class="content">
            <center>
            <h1>Enter The Domain / Area of your Intrest</h1>
            <br>
            <br>
            

            <select id="myDropdown">
		<option value="">Select a Domain</option>
		<option value="mentors_inner.php">Machine_Learning</option>
		<option value="mentors_dl.php">Deep_Learning</option>
		<option value="mentors_ml.php">Artificial_Intelligence</option>
	</select>


            <script>
		// Get the dropdown element
		var dropdown = document.getElementById("myDropdown");

		// Add an event listener to listen for changes
		dropdown.addEventListener("change", function() {
			// Get the selected option value
			var selectedOption = this.value;

			// If an option is selected, redirect to the corresponding page
			if (selectedOption) {
				window.location.href = selectedOption;
			}
		});
	</script>

            </center>
        </div>
    </body>
</html>