<?php

	session_start();

	require( 'config.php' );
	require( 'includes/link.php' );

	$status = array();

	$sess_sch = 'school';

	if (isset($_POST['submit']) ) {
		$school = $_POST['school'];
		$principals = $_POST['principal'];
		$year = $_POST['year'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];

				
			$query ="SELECT 
						* 
					FROM 
						school
					WHERE
						s_name = '$sess_sch'
			";
			
			$result = mysqli_query( $link, $query );


		if ( $result && mysqli_num_rows($result) > 0) {

			$query = "UPDATE
					 	school 
					 SET 
					 	s_name = '$school' , p_name = '$principals', year = '$year', address = '$address',contact = '$contact'
					WHERE
						s_name = '$sess_sch'
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
	<title>Edit School - E-School - Online School Management System</title>
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
		<h1>Edit School</h1>

		<div class="cleaner"></div>
		<div class="cleaner"></div>
		
		<?php

			
				$query ="SELECT 
							* 
						FROM 
							school
						WHERE
							status = '1' 
						AND
							s_name = '$sess_sch'
				";
				
				$result = mysqli_query( $link, $query );
				
				if ( $result && mysqli_num_rows($result) > 0 ) {
					while($sl = mysqli_fetch_assoc($result)) {
			?>
	</div>

		<div style="margin: 5px 0px 5px 66px">

			<div class="row">
				<div class="col-xs-6 col-md-4">
					<p style=" text-align:center;">School Name</p>
					<p style=" text-align:center;">Principal Name</p>
					<p style=" text-align:center;">Year</p>
					<p style=" text-align:center;">Address</p>
					<p style=" text-align:center;">Contact</p>
				</div>
				<div class="col-xs-6 col-md-4"  style="text-align:center;">
					<p><?php echo $sl['s_name']; ?></p>
					<p><?php echo $sl['p_name']; ?></p>
					<p><?php echo $sl['year']; ?></p>
					<p><?php echo $sl['address']; ?></p>
					<p><?php echo $sl['contact']; ?></p>
				</div>
				<div class="col-xs-6 col-md-4">
					<form class="form-inline form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
						<input class="form-control" type="text" name="school" placeholder="School Name"><br>
						<input class="form-control" type="text" name="principal" placeholder="Principal Name"><br>
						<input class="form-control" type="text" name="year" placeholder="Year"><br>
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
