<?php

if ( isset( $_POST['submit'] ) ) {
	$name = $_POST['staff_name'];
	$post = $_POST['post'];
	$quali = $_POST['qualification'];
	$address = $_POST['staff_add'];
	$contact = $_POST['staff_contact'];
	
	
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
			
			
			$query = "INSERT INTO staff (id, name, post, quali, address, contact) VALUES (NULL, '$name', '$post', '$quali', '$address', '$contact')";
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
	<title>Add Staff - E-School - Online School Management System</title>
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
		<h1>Add Staff Details</h1>

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
					<label class="control-label col-sm-5">Enter Staff Name:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="staff_name" placeholder="Staff Name">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Designation:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="post" placeholder="Designation">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Qualification:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="qualification" placeholder="Qualification">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Address:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="staff_add" placeholder="Address">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Contact:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="staff_contact" placeholder="Contact">
						</div>
				</div>

                <div id="buttons" class="btn form-group">
                	<input class="btn btn-default" type="submit" name="submit" value="ADD" />
                </div>






			</form>
		</div>

		<ul class="pager" style="background-color:transparent;">
			<li class="previous"><a style="background-color:#4D4D4D;" href="add school.php">Previous</a></li>
			<li><a style="background-color:#4D4D4D;" href="add class.php">Next</a></li>
		</ul>

	</div>

	<?php require( 'includes/footer.php' ); ?>

</body>
</html>
