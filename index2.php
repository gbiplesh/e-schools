<?php
	require( 'config.php' );
	require( 'includes/link.php' );
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>E-School - Online School Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="css/bootstrap_2.css" rel="stylesheet"/>
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet"/> -->
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/bootstrap_2.js"></script>
	<!-- <script src="js/bootstrap.min.js"></script> -->
	<link href="css/w3.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
	<script src="js/script.js"></script>
</head>
<body>

	<?php require( 'includes/header.php' ); ?>


	<div id="menu" style="height:50px;" id='topnav'>

		<ul>
			<li><a href="contact.php">Contact</a></li>
		    <li><a href="news.php">News</a></li>
			<li class="active"><a href="index.php">Home</a></li>
		</ul>

		<div id="sidenav">

			<nav class="w3-sidenav w3-grey w3-card-4 w3-animate-left" style="display:none;z-index:5">
			  
				<header class="w3-container w3-dark-grey">
					<h5>Add Details<a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-closenav" title="close sidenav">&times;</a>
					</h5>
				</header>

				<a class="w3-padding" href="add school.php">Add School</a> 
				<a class="w3-padding" href="add staff.php">Add Staff</a> 
				<a class="w3-padding" href="add class.php">Add Class</a> 
				<a class="w3-padding" href="add students.php">Add Students</a> 
				<a class="w3-padding" href="add results.php">Add Results</a> 
				<a class="w3-padding" href="add guardians.php">Add Guardians</a> 

				<header class="w3-container w3-dark-grey">
					<h5>View Details</h5>
				</header>
				<a class="w3-padding" href="view staff.php">View Staff</a> 
				<a class="w3-padding" href="view class.php">View Class</a> 
				<a class="w3-padding" href="view students.php">View Students</a> 
				<a class="w3-padding" href="view results.php">View Results</a> 
				<a class="w3-padding" href="view guardians.php">View Guardians</a> 


			</nav>

			<div class="w3-overlay w3-animate-opacity w3-large" onclick="w3_close()" style="cursor:pointer"></div>

			<div id="main" style="transition:0.4s;">

				<div class="w3-container w3-margin-left">
				  
					<span class="w3-opennav w3-xlarge" onclick="w3_open()">&#9776;</span>
				</div>
			</div>
		</div>
	</div>

	<img class="w3-animate-opacity" id="img_1" src="img/img_3.png" width="100%" height="auto">

	<div class="container-fluid" style="background-color:whitesmoke; color:black;">

		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>

		<div class="row">
			<div class="col-xs-6 col-md-6">
				<img class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="img/school logo.png" width="50%" height="auto" style="margin-left: 25%;cursor:pointer;">
				    <ul class="dropdown-menu dropdown-menu-right">
					    <li><a href="remove school.php">Remove School</a></li>
					    <li><a href="enter school.php">Edit School</a></li>
					    <li><a href="add school.php">Add School</a></li>
				    </ul>

			</div>

			<div class="col-xs-6 col-md-6">
					<img class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="img/staffs logo.png" width="50%" height="auto" style="margin-left: 25%;cursor:pointer;">
						<ul class="dropdown-menu">
						    <li><a href="remove staff.php">Remove Staff</a></li>
						    <li><a href="enter staff.php">Edit Staff</a></li>
						    <li><a href="add staff.php">Add Staff</a></li>
					    </ul>
			</div>
		</div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>


		<div class="row">
			<div class="col-xs-6 col-md-6">
					<img class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="img/guardians logo.png" width="50%" height="auto" style="margin-left: 25%;cursor:pointer;">
						<ul class="dropdown-menu dropdown-menu-right">
						    <li><a href="remove guardian.php">Remove Guardian</a></li>
						    <li><a href="enter guardian.php">Edit Guardian</a></li>
						    <li><a href="add guardians.php">Add Guardian</a></li>
					    </ul>
			</div>

			<div class="col-xs-6 col-md-6">
					<img class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="img/students logo.png" width="50%" height="auto" style="margin-left: 25%;cursor:pointer;">
						<ul class="dropdown-menu">
						    <li><a href="remove student.php">Remove Students</a></li>
						    <li><a href="enter student.php">Edit Students</a></li>
						    <li><a href="add students.php">Add Students</a></li>
					    </ul>
			</div>
		</div>

		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>



	</div>

	<?php require( 'includes/footer.php' ); ?>

</body>
</html>