<?php

if ( isset( $_POST['submit'] ) ) {
	$class = $_POST['class'];
	$sec = strtoupper($_POST['sec']);
	
	
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
			
			
			$query = "INSERT INTO class (id, class, sec) VALUES (NULL, '$class', '$sec')";
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
	<title>Add Class - E-School - Online School Management System</title>
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
		<h1>Add Class Details</h1>

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
				
                <div id="buttons" class="btn form-group">
                	<input class="btn btn-default" type="submit" name="submit" value="ADD" />
                </div>

			</form>
		</div>

		<ul class="pager" style="background-color:transparent;">
			<li class="previous"><a style="background-color:#4D4D4D;" href="add staff.php">Previous</a></li>
			<li><a style="background-color:#4D4D4D;" href="add students.php">Next</a></li>
		</ul>

	</div>

	<?php require( 'includes/footer.php' ); ?>

</body>
</html>
