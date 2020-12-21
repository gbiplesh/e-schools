<?php

if ( isset( $_POST['submit'] ) ) {
	$sname = $_POST['school_name'];
	$pname = $_POST['principal_name'];
	$year = $_POST['est_year'];
	$address = $_POST['sch_add'];
	$contact = $_POST['sch_contact'];
	
	
	require( 'config.php' );
	require( 'includes/link.php' );
	
	
	// $query = "SELECT * FROM class WHERE class = '$level'";
	// $result = mysqli_query($link, $query);
	// $rows = mysqli_num_rows($result);
	// if($rows = 0){
	// 	$message = "Class code doesn't exist!";
	// }
	// else{
	// 	if(!empty($level)){
	// 		$fname = ucwords($fname);
	// 		$lname = ucwords($lname);
	// 		$level = strtoupper($level);
	// 		$address = ucwords($address);
			
			
			$query = "INSERT INTO school (s_id, s_name, p_name, year, address, contact) VALUES (NULL, '$sname', '$pname', '$year', '$address', '$contact')";
			// $query2 = "INSERT INTO authentication (username, password) VALUES ('$username', '$password')";
			
			$result = mysqli_query( $link, $query );
			// $result2 = mysqli_query( $link, $query2 );


			if ($result) {
				$message = 'Added successfully';
			}
			else{
				$message = 'Operation Failed!'.mysqli_error($result);
			}
			
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add School - E-School - Online School Management System</title>
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


	<div class="center">
		<h1>Add School Details</h1>

		<div class="cleaner"></div>
		<div class="cleaner"></div>

        <?php if ( isset($message) ): ?>
		<div id="message">
			<?php echo $message; ?>
				
		</div>
		<?php endif; ?>

		<div class="cleaner"></div>
			

		<div>
			<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">

				<div class="form-group">
					<label class="control-label col-sm-5">Enter School Name:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="school_name" placeholder="School Name">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Principal Name:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="principal_name" placeholder="Principal Name">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Established Year:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="est_year" placeholder="Established Year">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Address:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="sch_add" placeholder="School Address">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Contact:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="sch_contact" placeholder="Contact">
						</div>
				</div>

                <div id="buttons" class="btn form-group">
                	<input class="btn btn-default" type="submit" name="submit" value="ADD" />
                </div>

			</form>
		</div>

		<ul class="pager" style="background-color:transparent;">
			<li><a style="background-color:#4D4D4D;" href="add staff.php">Next</a></li>
		</ul>

	</div>

	<?php require( 'includes/footer.php' ); ?>

</body>
</html>
