<?php

if ( isset( $_POST['submit'] ) ) {
	$username = $_POST['username'];
	$term = $_POST['term'];
	$code = $_POST['code'];
	$date = $_POST['date'];
	$sub = $_POST['sub'];
	$full = $_POST['full'];
	$pass = $_POST['pass'];
	$theory = $_POST['theory'];
	$practical = $_POST['practical'];
	$remarks = $_POST['remarks'];
	
	
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
			
			
			$query = "INSERT INTO results (id, username, term, date, code, sub, full, pass, theory, practical, remarks) VALUES (NULL, '$username', '$term', '$date', '$code', '$sub', '$full', '$pass', '$theory', '$practical', '$remarks')";
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
	<title>Add Results - E-School - Online School Management System</title>
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
		<h1>Add Students Results</h1>

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
				<table class="table table-condensed ">
					<tr>
						<td><input class="form-control" type="text" name="username" placeholder="Username"></td>
						<td><input class="form-control" type="text" name="term" placeholder="Term"></td>
						<td><input class="form-control" type="date" name="date" placeholder="Date"></td>
					</tr>
					<tr>
						<th>Subject Code</th>
						<th>Subjects</th>
						<th>Full Marks</th>
						<th>Pass Marks</th>
						<th colspan="2">Obtained Marks</th>
						<th>Remarks</th>
					</tr>
					<tr>
						<td><input class="form-control" type="text" name="code" placeholder="Subject Code"></td>
						<td><input class="form-control" type="text" name="sub" placeholder="Subjects"></td>
						<td><input class="form-control" type="text" name="full" placeholder="Full Marks"></td>
						<td><input class="form-control" type="text" name="pass" placeholder="Pass Marks"></td>
							<td><input class="form-control" type="text" name="theory" placeholder="Theory"></td>
							<td><input class="form-control" type="text" name="practical" placeholder="Practical"></td>
						<td><input class="form-control" type="text" name="remarks" placeholder="Remarks"></td>
					</tr>
				</table>
				
                <div id="buttons" class="btn form-group">
                	<input class="btn btn-default" type="submit" name="submit" value="ADD" />
                </div>


			</form>
		</div>

		<ul class="pager" style="background-color:transparent;">
			<li class="previous"><a style="background-color:#4D4D4D;" href="add students.php">Previous</a></li>
			<li><a style="background-color:#4D4D4D;" href="add guardians.php">Next</a></li>
		</ul>

	</div>

	<?php require( 'includes/footer.php' ); ?>

</body>
</html>
