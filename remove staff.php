<?php

require( 'config.php' );
require( 'includes/link.php' );

$status = array();

if (isset($_POST['submit']) && ! empty($_POST['staff']) ) {
	$staff = $_POST['staff'];

	$query = 	"SELECT 
						*
				FROM 
					staff
				WHERE 
					name = '$staff' 
				";
				
	$result = mysqli_query($link, $query) or exit(mysqli_error($link));
	
	if ( $result && mysqli_num_rows($result) > 0) {
		$row = mysqli_fetch_assoc($result);

		$staff 	= $row['name'];
		
		$query = "UPDATE
				 	staff 
				 SET 
				 	`status` = '0' 
				 WHERE 
				 	staff.name = '$staff'
			";
		
		$result = mysqli_query($link, $query) or exit(mysqli_error($link));
		
		if ( mysqli_affected_rows($link) > 0){
			$status['success'] = true;
		}

	} else {
		$status['no_such_staff'] = true;
	}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Remove Staff - E-School - Online School Management System</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="css/bootstrap_2.css" rel="stylesheet"/>
	<!-- <link href="css/bootstrap.min.css" rel="stylesheet"/> -->
	<!-- <link href="js/bootstrap.js" rel="stylesheet"> -->
	<!-- <link href="js/bootstrap.min.js" rel="stylesheet"> -->
	<link href="css/w3.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
	<script src="js/script.js"></script>
</head>
<body>

	<?php require( 'includes/header.php' ); ?>

	<div id="menu" style="height:50px;">

		<ul>
			<li><a href="contact.php">Contact</a></li>
		    <li><a href="news.php">News</a></li>
			<li><a href="index.php">Home</a></li>
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

	<div class="center">
		<h1>Remove Staff</h1>

		<div class="cleaner"></div>
		<div class="cleaner"></div>

		<div class="remove">
			
			<?php if ( isset ( $status ['success'] ) ) : ?>
				<div class="col-xs-12">
					
				    <p> Staff name: <?php echo $staff; ?> is now removed! </p>

				</div>

			<?php elseif ( isset ($status ['no_such_staff'] )): ?>
				<div class="col-xs-12 ad-error">
					<p><?php echo $staff; ?> doesn't exists.</p>
				</div>
			<?php else : ?>
			
			<div class="center">
				<form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
					<div class="form-group">
						<label class="control-label col-sm-5">Enter Staff Name:</label>
							<div class="col-sm-7">
								<input class="form-control" type="text" name="staff" placeholder="Staff Name">
							</div>
					</div>

					<div class="cleaner"></div>

	                <div id="buttons" class="btn form-group">
	                	<input class="btn btn-default" type="submit" name="submit" value="REMOVE" />
	                </div>
	            </form>
			</div>

			<?php endif; ?>

		
		</div>

	</div>

	<div class="cleaner"></div>
	<div class="cleaner"></div>

	<?php require( 'includes/footer.php' ); ?>

</body>
</html>
