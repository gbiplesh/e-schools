
<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Results - E-School - Online School Management System</title>
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

	<img src="img/report.png" style="margin-top:3px;">
		<h1>Students Results</h1>
		
		<div class="center">
			<form class="form-horizontal" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" >
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Username:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="username" placeholder="Username">
						</div>
				</div>
				<div class="form-group">
					<label class="control-label col-sm-5">Enter Term:</label>
						<div class="col-sm-7">
							<input class="form-control" type="text" name="term" placeholder="Term"></div>
				</div>

				<div class="cleaner"></div>

                <div id="buttons" class="btn form-group">
                	<input class="btn btn-default" type="submit" name="submit" value="VIEW" />
                </div>
            </form>
		
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		
		<?php
				if ( isset( $_POST['submit'] ) ) {
					$username = $_POST['username'];
					$term = $_POST['term'];
		
				require( 'config.php' );
				require( 'includes/link.php' );
				
				$query ="SELECT 
							* 
						FROM 
							results  
						WHERE
							username = '$username' 
						AND
							term = '$term'
				";
				
				$result = mysqli_query( $link, $query );
				
				$total = 0;
				$fm_sum = 0;

				if ( $result && mysqli_num_rows($result) > 0 ) {
			?>	

		</div>

		<div>
		<h3>Class 7</h3>
		<h6><?php echo $username ." | ".$term ;?></h6>

		<div class="cleaner"></div>

			<table class="table table-condensed" style="text-align:left;">
				<tr>
					<th>Subject Code</th>
					<th>Subject Name</th>
					<th>Full Marks</th>
					<th>Pass Marks</th>
					<th colspan="2">Obtained Marks</th>
					<th>Remarks</th>
				</tr>
				<tr>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th>Theory</th>
					<th>Practical</th>
					<th></th>

				</tr>

		<?php
					while($marks = mysqli_fetch_assoc($result)) {
						$th = $marks['theory'];
						$prac = $marks['practical'];
						$fm = $marks['full'];
						$pm = $marks['pass'];
						$remark = "-";
						
						$om = $th + $prac;

						$total += $om;
						$fm_sum += $fm;
				
						if ( $th < $pm ) {
							$remark = "*";
							$fail = true;
						}

		?>
				<tr>
						<td><?php echo $marks['code']; ?></td>
						<td><?php echo $marks['sub']; ?></td>
						<td><?php echo $marks['full']; ?></td>
						<td><?php echo $marks['pass']; ?></td>
						<td><?php echo $marks['theory']; ?></td>
						<td><?php echo $marks['practical']; ?></td>
						<td><?php echo $remark; ?></td>
				</tr>
		<?php
					}
				echo "</table>";
				} else {
				echo "Result is not created.";
			}
		?>
			</table>
	
		<?php
			if($fm_sum != 0){
			$percent = ( $total / $fm_sum )*100;
			}					
			else {
				$percent = null;
			}
		?>



			<table class="table table-condensed center" style="max-width: 200px;">
				<tr>
					<th>Grand Total</th>
					<td><?php echo $total; ?></td>
				</tr>
				<tr>
					<th>Percentage</th>
					<td><?php echo $percent; ?> %</td>
				</tr>
				<tr>
					<th>Result</th>
					<td><?php if (isset($fail)) echo "Fail"; else echo "Pass"; ?></td>
				</tr>
			</table>
		</div>

		<?php 
				}
		?>

		<ul class="pager" style="background-color:transparent;">
			<li class="previous"><a style="background-color:#4D4D4D;" href="view students.php">Previous</a></li>
			<li><a style="background-color:#4D4D4D;" href="view guardians.php">Next</a></li>
		</ul>
	
	</div>

	<?php require( 'includes/footer.php' ); ?>

</body>
</html>
