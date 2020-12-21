<?php

if ( isset( $_POST['submit'] ) ) {
	$roll = $_POST['roll_no'];
	$fname = $_POST['f_name'];
	$username = $_POST['username'];
	$sex = $_POST['sex'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$class = $_POST['class'];
	$sec = strtoupper($_POST['sec']);
	$dob = $_POST['dob'];
	$doa = $_POST['doa'];
	$address = $_POST['address'];
	$contact = $_POST['contact'];
	
	
	
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
			
			
			$query = "INSERT INTO students (id, roll, fname, username, sex, email, password, class, sec, dob, doa, address, contact) VALUES (NULL, '$roll', '$fname', '$username', '$sex', '$email', '$password', '$class', '$sec', '$dob', '$doa', '$address', '$contact' )";
			// $query2 = "INSERT INTO authentication (username, password) VALUES ('$username', '$password')";
			
			$result = mysqli_query( $link, $query );
			// $result2 = mysqli_query( $link, $query2 );


			if ($result) {
				$message = 'Added successfully';
			}
			else{
				$message = 'Operation Failed!'.mysqli_error();
			}
			
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Add Students- E-School - Online School Management System</title>
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
		<h1>Add Students Details</h1>

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
					<label class="control-label col-sm-5">Enter Roll No:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="roll_no" placeholder="Roll No">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Full Name:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="f_name" placeholder="Full Name">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Username:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="username" placeholder="Username">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Sex:</label>
					<div class="col-sm-7">
						<label class="radio-inline"><input type="radio" name="sex" value="male">Male</label>
						<label class="radio-inline"><input type="radio" name="sex" value="female">Female</label>
						<label class="radio-inline"><input type="radio" name="sex" value="others">Others</label>
					</div>
				</div>

				<div class="form-group">
					<label class="control-label col-sm-5">Enter email:</label>
						<div class="col-sm-7">
							<input class="form-control" type="email" name="email" placeholder="E-mail">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Password:</label>
						<div class="col-sm-7">
							<input class="form-control" type="password" name="password" placeholder="Password">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Class:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="class" placeholder="Class">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Section:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="sec" placeholder="Section">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter D.O.B.:</label>
						<div class="col-sm-7">
							<input class="form-control" type="date" name="dob">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter D.O.A.:</label>
						<div class="col-sm-7">
							<input class="form-control" type="date" name="doa">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Address:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="address" placeholder="Address">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Contact:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="contact" placeholder="Contact">
						</div>
				</div>


                <div id="buttons" class="btn form-group">
                	<input class="btn btn-default" type="submit" name="submit" value="ADD" />
                </div>

			</form>
		</div>

		<ul class="pager" style="background-color:transparent;">
			<li class="previous"><a style="background-color:#4D4D4D;" href="add class.php">Previous</a></li>
			<li><a style="background-color:#4D4D4D;" href="add results.php">Next</a></li>
		</ul>

	</div>

	<?php require( 'includes/footer.php' ); ?>

</body>
</html>
