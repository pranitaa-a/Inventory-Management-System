<?php
    //start the session.
	session_start();
	if(!isset($_SESSION['user'])) header('location: login.php');
	
    $user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Inventory Management System</title>	
	<link rel="stylesheet" type="text/css" href="css/login.css">
    <script src="https://use.fontawesome.com/94fb457042.js"></script>
</head>
<body>
    <div id="dashboardMainContainer">
        <?php include('partials/side_bar.php') ?> 
	    <div class="dashboard_content_container" id="dashboard_content_container">
	     <?php include('partials/topnav.php') ?>
	     <div class="dashboard_content">
			    <div class="dashboard_content_main">
				    <form action="">
					    <div>
						    <label for="first_name">First Name</label>
						    <input type="text" id="first_name" name="first_name" />
						</div>
						<div>
						    <label for="last_name">Last Name</label>
						    <input type="text" id="last_name" name="last_name" />
						</div>
						<div>
						    <label for="email">Email</label>
						    <input type="text" id="email" name="email" />
						</div>
						<div>
						    <label for="password">Password</label>
						    <input type="text" id="password" name="password" />
						</div>
						<button type="submit"><i class="fa fa-send"></i></button>
					    <input type="submit" value="Submit" />
					
					</form>
			</div>
		</div>
    </div>
    </div>
<script src="js/script.js"> </script>
</body>
</html>

