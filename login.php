<?php
    //start the session.
	session_start();
    if(isset($_SESSION['user'])) header('location: dashboard.php');
  
    $error_message = '';
		
    if($_POST){
		include('database/connection.php');
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
	    $query = 'SELECT * FROM users WHERE users.email="'. $username .'" AND users.password="'.$password .'"';
		$stmt = $conn->prepare($query);
		$stmt->execute();
		
		if($stmt->rowCount() > 0){
		    $stmt->setFetchMode(PDO::FETCH_ASSOC);
		    $user = $stmt->fetchAll()[0];
		    $_SESSION['user'] = $user;
		    
			header('Location: dashboard.php');
		}else $error_message = 'Please make sure username and password are correct.';
	}
?>



<!DOCTYPE html>
<html>
<head>
    <title>IMS-login Inventory Management System</title>
	
	<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body id="loginBody">
    <?php if(!empty($error_message)){ ?>
        <div id="errorMessage">
	        <strong>ERROR:</strong><p> <?= $error_message ?> </p>
	    </div>
	<?php } ?>
    <div class="container">
	    <div class="loginHeader">
	        <h1>IMS</h1>
		    <p>Inventory Management System</p>
	    </div>
	    <div class="loginBody">
	        <form action="login.php" method="POST">
		        <div class="loginInputsContainer">
			        <label for="">Username</label>
					<input placeholder="username" name="username" type="text" />
			    </div>
				<div class="loginInputsContainer">
			        <label for="">Password</label>
				    <input placeholder="password" name="password" type="password" />
			    </div>
				<div class="loginButtonContainer">
				    <button>login</button>
				</div>
			</form>
		</div>
	</div>	
</body>
</html>




