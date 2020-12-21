
<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Guardians - E-School - Online School Management System</title>
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
		<h1>View Guardians</h1>

		<div class="cleaner"></div>
		<div class="cleaner"></div>
		
		<?php
			require( 'config.php' );
			require( 'includes/link.php' );
			
				$query ="SELECT 
							* 
						FROM 
							guardians 
						WHERE
							legal = '1'   
				";
				
				$result = mysqli_query( $link, $query );
				
				if ( $result && mysqli_num_rows($result) > 0 ) {
			?>	


		<div>
			<table class="table table-condensed" style="text-align:left;">
				<tr>
					<th>S.No.</th>
					<th>Name</th>
					<th>Related Student name</th>
					<th>Address</th>
					<th>Contact</th>
				</tr>

		<?php
					while($guardians = mysqli_fetch_assoc($result)) {
						for ($i=1; $i < 2; $i++) { 
							$a = 1 ;

		?>
				<tr>
					<td><?php echo $a; ?></td>
					<td><?php echo $guardians['name']; ?></td>
					<td><?php echo $guardians['student']; ?></td>
					<td><?php echo $guardians['address']; ?></td>
					<td><?php echo $guardians['contact']; ?></td>
				</tr>
		<?php
							$a++;
						}
					}
				echo "</table>";
				}

		?>
		</div>

		<ul class="pager" style="background-color:transparent;">
			<li class="previous"><a style="background-color:#4D4D4D;" href="view results.php">Previous</a></li>
		</ul>

	</div>

	<?php require( 'includes/footer.php' ); ?>

</body>
</html>
