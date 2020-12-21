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

		<?php require( 'includes/staffNav.php' ); ?>
		
	</div>

	<!-- <img class="w3-animate-opacity" id="img_1" src="img/img_3.png" width="100%" height="auto"> -->

	<div class="container-fluid" style="background-color:whitesmoke; color:black;">

		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>

		<div class="cleaner"></div>
		<div class="cleaner"></div>


		<div class="row">
		
			<div class="col-xs-6 col-md-6">
					<img class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="img/students logo.png" width="50%" height="auto" style="margin-left: 25%;cursor:pointer;">
						<ul class="dropdown-menu">
						    <li><a href="view results.php">My Results</a></li>
						    <li><a href="view students.php">My Details</a></li>
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