<?php
	session_start();

	if (isset($_POST['submit']) && ! empty($_POST['guardian']) ) {
	$sch = $_POST['guardian'];

	$_SESSION["guardian"] = $grd;
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Edit Guardian - E-School - Online School Management System</title>
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
		<h1>Edit Guardian</h1>
			
			<div class="center">
				<form class="form-horizontal" method="post" action="enter staff.php" >
					<div class="form-group">
						<p>Enter Guardian Name You Want To Edit</p>
						<label class="control-label col-sm-5">Enter Guardian Name :</label>
							<div class="col-sm-7">
								<input class="form-control" type="text" name="guardian" placeholder="Guardian Name">
							</div>
					</div>

					<div class="cleaner"></div>

	                <div id="buttons" class="btn form-group">
	                	<input class="btn btn-default" type="submit" name="submit" value="EDIT" />
	                </div>
	            </form>
			</div>

	</div>

	<?php require( 'includes/footer.php' ); ?>

</body>
</html>
