<?php

	session_start();

	require( 'config.php' );
	require( 'includes/link.php' );

	$status = array();

	$sess_std = 'gg';

	if (isset($_POST['submit']) ) {
		$roll = $_POST['roll'];
		$name = $_POST['name'];
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

				
			$query ="SELECT 
						* 
					FROM 
						students
					WHERE
						fname = '$sess_std'
			";
			
			$result = mysqli_query( $link, $query );


		if ( $result && mysqli_num_rows($result) > 0) {

			$query = "UPDATE
					 	students 
					 SET 
					 	roll = '$roll' , fname = '$name', username = '$username', sex = '$sex', email = '$email', password = '$password', class = '$class', sec = '$sec', dob = '$dob', doa = '$doa', address = '$address',contact = '$contact'
					WHERE
						fname = '$sess_std'
				";
			// $query2 = "UPDATE
			// 		 	school 
			// 		 SET 
					 	
			// 		WHERE
			// 			s_name = '$sess_sch'
			// 	";
			// $query3 = "UPDATE
			// 		 	school 
			// 		 SET 
					 	
			// 		WHERE
			// 			s_name = '$sess_sch'
			// 	";
			// $query4 = "UPDATE
			// 		 	school 
			// 		 SET 
					 	
			// 		WHERE
			// 			s_name = '$sess_sch'
			// 	";
			// $query5 = "UPDATE
			// 		 	school 
			// 		 SET 
					 	
			// 		WHERE
			// 			s_name = '$sess_sch'
			// 	";
			
			$result = mysqli_query($link, $query) or exit(mysqli_error($link));
			// $result2 = mysqli_query($link, $query2) or exit(mysqli_error($link));
			// $result3 = mysqli_query($link, $query3) or exit(mysqli_error($link));
			// $result4 = mysqli_query($link, $query4) or exit(mysqli_error($link));
			// $result5 = mysqli_query($link, $query5) or exit(mysqli_error($link));
		}
	}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Students - E-School - Online School Management System</title>
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
		<h1>Edit Students</h1>

		<div class="cleaner"></div>
		<div class="cleaner"></div>
		
		<?php

			
				$query ="SELECT 
							* 
						FROM 
							students
						WHERE
							status = '1' 
						AND
							fname = '$sess_std'
				";
				
				$result = mysqli_query( $link, $query );
				
				if ( $result && mysqli_num_rows($result) > 0 ) {
					while($sd = mysqli_fetch_assoc($result)) {
			?>
	</div>

		<div style="margin: 5px 0px 5px 66px">

			<div class="row">
				<div class="col-xs-6 col-md-4">
					<p style=" text-align:center;">Roll No.</p>
					<p style=" text-align:center;">Full Name</p>
					<p style=" text-align:center;">Username</p>
					<p style=" text-align:center;">Sex</p>
					<p style=" text-align:center;">E-mail</p>
					<p style=" text-align:center;">Password</p>
					<p style=" text-align:center;">Class</p>
					<p style=" text-align:center;">Section</p>
					<p style=" text-align:center;">Date of Birth</p>
					<p style=" text-align:center;">Date of Admission</p>
					<p style=" text-align:center;">Address</p>
					<p style=" text-align:center;">Contact</p>
				</div>
				<div class="col-xs-6 col-md-4"  style="text-align:center;">
					<p><?php echo $sd['roll']; ?></p>
					<p><?php echo $sd['fname']; ?></p>
					<p><?php echo $sd['username']; ?></p>
					<p><?php echo $sd['sex']; ?></p>
					<p><?php echo $sd['email']; ?></p>
					<p><?php echo $sd['password']; ?></p>
					<p><?php echo $sd['class']; ?></p>
					<p><?php echo $sd['sec']; ?></p>
					<p><?php echo $sd['dob']; ?></p>
					<p><?php echo $sd['doa']; ?></p>
					<p><?php echo $sd['address']; ?></p>
					<p><?php echo $sd['contact']; ?></p>
				</div>
				<div class="col-xs-6 col-md-4">
					<form class="form-inline form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
						<input class="form-control" type="text" name="roll" placeholder="Roll No."><br>
						<input class="form-control" type="text" name="name" placeholder="Full Name"><br>
						<input class="form-control" type="text" name="username" placeholder="Username"><br>
						<div>
						<label class="radio-inline"><input type="radio" name="sex" value="male">M</label>
						<label class="radio-inline"><input type="radio" name="sex" value="female">F</label>
						<label class="radio-inline"><input type="radio" name="sex" value="others">O</label>
						</div>
						<input class="form-control" type="email" name="email" placeholder="E-mail"><br>
						<input class="form-control" type="password" name="password" placeholder="Password"><br>
						<input class="form-control" type="text" name="class" placeholder="Class"><br>
						<input class="form-control" type="text" name="sec" placeholder="Section"><br>
						<input class="form-control" type="date" name="dob"><br>
						<input class="form-control" type="date" name="doa"><br>
						<input class="form-control" type="text" name="address" placeholder="Address"><br>
						<input class="form-control" type="text" name="contact" placeholder="Contact"><br>						

        				<input class="btn btn-default" type="submit" name="submit" value="EDIT"><br>
		            </form>
				</div>
			</div>

			<div class="cleaner"></div>
			<div class="cleaner"></div>


<?php


?>

					
		<?php
					}
				}


		?>
		</div>

	<?php require( 'includes/footer.php' ); ?>

</body>
</html>
