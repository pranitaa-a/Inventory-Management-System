<?php
    //start the session.
	session_start();
	if(!isset($_SESSION['user'])) header('location: login.php');
	$_SESSION['table'] = 'users';
    $user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Dashboard - Inventory Management System</title>	
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css" >
    
</head>
<body>
    <div id="dashboardMainContainer">
        <?php include('partials/side_bar.php') ?> 
	    <div class="dashboard_content_container" id="dashboard_content_container">
	     <?php include('partials/topnav.php') ?>
	     <div class="dashboard_content">
		    <div>
			    <div id="userAddFormContainer">			
				    <form action="database/user-add.php" method="POST" class="appForm">
					    <div class="appFormInputContainer">
						    <label for="first_name">First Name</label>
						    <input type="text" class="appFormInput" id="first_name" name="first_name" />
						</div>
						<div>
						    <label for="last_name">Last Name</label>
						    <input type="text" class="appFormInput" id="last_name" name="last_name" />
						</div>
						<div>
						    <label for="email - ID">Email - ID</label>
						    <input type="text" class="appFormInput" id="email - ID" name="email - ID" />
						</div>
						<div>
						    <label for="password">Password</label>
						    <input type="text" class="appFormInput" id="password" name="password" />
						</div>
						<button type="submit" class="appBtn"> <i class="fa fa-plus"></i> Add user</button>
					</form>
			</div>
		</div>
        </div>
    </div>
<script src="js/script.js"></script>
</body>
</html>

