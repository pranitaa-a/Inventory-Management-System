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
				</div>
		</div>
		</div>
    </div>
<script>
    var sideBarIsOpen = true;
	
    toggleBtn.addEventListener( 'click', (event) => {
	    event.preventDefault();
		
		if(sideBarIsOpen){
		    dashboard_sidebar.style.width = '10%';
			dashboard_sidebar.style.transition = '0.3s all';
		    dashboard_content_container.style.width = '90%';
		    dashboard_logo.style.fontSize = '60px';
		    userImage.style.width = '60px';
		
		    menuIcons = document.getElementsByClassName('menuText');
		    for(var i=0; i < menuIcons.length;i++){
		        menuIcons[i].style.display = 'none';
		    }
	    
		    document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
		    sideBarIsOpen = false;
		} else {
			dashboard_sidebar.style.width = '20%';
		    dashboard_content_container.style.width = '80%';
		    dashboard_logo.style.fontSize = '80px';
		    userImage.style.width = '80px';
		
		    menuIcons = document.getElementsByClassName('menuText');
		    for(var i=0; i < menuIcons.length;i++){
		        menuIcons[i].style.display = 'inline-block';
		    }
		    document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'left';
		    sideBarIsOpen = true;
		}	        
	});
</script>
</body>
</html>

