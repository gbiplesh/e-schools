
<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Students - E-School - Online School Management System</title>
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
	<?php require( 'includes/menu.php' ); ?>

	<div class="center" style="max-width:65%;">
		<h1>View Students</h1>

		<div class="cleaner"></div>
		<div class="cleaner"></div>
		
		<div class="center">
			<form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Class:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="class" placeholder="Class">
						</div>
				</div>

				<div class="cleaner"></div>

                <div id="buttons" class="btn form-group">
                	<input class="btn btn-default" type="submit" name="submit" value="VIEW" />
                </div>
            </form>
		</div>
		
			<?php 
				if ( isset( $_POST['submit'] ) ) {
					$class = $_POST['class'];
		
					require( 'config.php' );
					require( 'includes/link.php' );
					
						$query ="SELECT 
									* 
								FROM 
									students   
								WHERE
									class = '$class'
						";
						
						$result = mysqli_query( $link, $query );
						
						if ( $result && mysqli_num_rows($result) > 0 ) {
			
			?>

		<div>
				<table class="table table-condensed" style="text-align:left;">
					<tr>
						<th>Roll.No.</th>
						<th>Name</th>
						<th>Username</th>
						<th>Email</th>
						<th>Sec</th>
						<th>Date of Birth</th>
						<th>Date of Admission</th>
						<th>Address</th>
						<th>Contact</th>
					</tr>

		<?php
					while($student = mysqli_fetch_assoc($result)) {

		?>
					<tr>
						<td><?php echo $student['roll']; ?></td>
						<td><?php echo $student['fname'];  ?></td>
						<td><?php echo $student['username'];  ?></td>
						<td><?php echo $student['email'];  ?></td>
						<td><?php echo $student['sec'];  ?></td>
						<td><?php echo $student['dob']; ?></td>
						<td><?php echo $student['doa']; ?></td>
						<td><?php echo $student['address']; ?></td>
						<td><?php echo $student['contact']; ?></td>
					</tr>
		<?php
					}
				echo "</table>";
				} else {
				echo "Class is not created.";
			}
			} 

		?>
		</div>

		<ul class="pager" style="background-color:transparent;">
			<li class="previous"><a style="background-color:#4D4D4D;" href="view class.php">Previous</a></li>
			<li><a style="background-color:#4D4D4D;" href="view results.php">Next</a></li>
		</ul>

	</div>

	<?php require( 'includes/footer.php' ); ?>

</body>
</html>
