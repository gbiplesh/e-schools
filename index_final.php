<?php
//require( 'config.php' );
	//require( 'includes/link.php' );
//	session_start();

	//from another
         
  if(isset($_POST["submit"])) {

    $username = $_POST['aUsername'];
    $password = $_POST['aPassword'];
	
	
require 'config.php';
require( 'includes/link.php' );

	$sql = "SELECT  * FROM admins";

    $query =  mysqli_query($conn , $sql ) 
    or die("Failed to query database".mysql_error());



if (mysqli_num_rows($query) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($query)) {
		
		if ($row['adminUser'] == $username && $row['legal'] == '1') {
		
       header('Location: adminpage.php');
       exit;

		} else {

      echo "<h3 style='font-weight: bold; color: red; text-align: center;'>Invalid User Found!</h3>";
		}
    }
} else {
    
      echo "12346";
}

mysqli_close($conn);    
	
    }
	


?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>E-School - Online School Management System</title>
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


	<div id="menu" style="height:50px;" id='topnav'>

		<ul>
			<li><a href="contact.php">Contact</a></li>
		    <li><a href="news.php">News</a></li>
			<li class="active"><a href="index.php">Home</a></li>
		</ul>

		<div id="sidenav">

			<nav class="w3-sidenav w3-grey w3-card-4 w3-animate-left" style="display:none;z-index:5">
			  
				<header class="w3-container w3-dark-grey">
					<h5>Add Details<a href="javascript:void(0)" onclick="w3_close()" class="w3-right w3-xlarge w3-closenav" title="close sidenav">&times;</a>
					</h5>
				</header>

				<a class="w3-padding" href="add school.php">Add School</a> 
				<a class="w3-padding" href="add staff.php">Add Staff</a> 
				<a class="w3-padding" href="add class.php">Add Class</a> 
				<a class="w3-padding" href="add students.php">Add Students</a> 
				<a class="w3-padding" href="add results.php">Add Results</a> 
				<a class="w3-padding" href="add guardians.php">Add Guardians</a> 

				<header class="w3-container w3-dark-grey">
					<h5>View Details</h5>
				</header>
				<a class="w3-padding" href="view staff.php">View Staff</a> 
				<a class="w3-padding" href="view class.php">View Class</a> 
				<a class="w3-padding" href="view students.php">View Students</a> 
				<a class="w3-padding" href="view results.php">View Results</a> 
				<a class="w3-padding" href="view guardians.php">View Guardians</a> 


			</nav>

			<div class="w3-overlay w3-animate-opacity w3-large" onclick="w3_close()" style="cursor:pointer"></div>

			<div id="main" style="transition:0.4s;">

				<div class="w3-container w3-margin-left">
				  
					<span class="w3-opennav w3-xlarge" onclick="w3_open()">&#9776;</span>
				</div>
			</div>
		</div>
	</div>

	<img class="w3-animate-opacity" id="img_1" src="img/img_3.png" width="100%" height="auto">

	<div class="container-fluid" style="background-color:whitesmoke; color:black;">

		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>


		<div class="row">
			<div class="col-xs-6 col-md-4">
				<div style="margin:auto;">
					<img src="img/admin.png" width="100%"/>
				</div>
			</div>
			<div class="col-xs-12 col-md-8" style="text-align:center;">
				<!-- <img src="img/sm_2.jpg" width="100%"  > -->
				<h1>Adminstrator</h1>
				<p>Login as Administrator and create and control school. <br> Be a school Manager. </p>

			    <div class="login_box">
			    	
		            <form class="form-horizontal" action="" method="POST">
		            	

						<div class="input_group">
		                	<input class="form-control input-sm" type="text" name="aUsername" class="text" placeholder="Username" />
						</div>

						<div class="input_group">
		                	<input class="form-control input-sm" type="password" name="aPassword" class="text" placeholder="Password" />
						</div>

		                <div id="buttons" class="btn input_group">
			                <input type="submit" name="login" value="Login" class="btn btn-default btn-sm">
			                <input type="submit" name="signup" value="Sign Up" class="btn btn-default btn-sm">
		                </div>
		            </form>
			    </div>




			</div>
		</div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>

	</div>


	<div class="container-fluid">
		
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>

		<div class="row">
			<div class="col-xs-12 col-md-8"  style="text-align:center;">
				<!-- <img src="img/sm_2.jpg" width="100%"  > -->
				<h1>Staffs</h1>
				<p>Login as Staff and create and control class. <br> </p>

			    <div class="login_box">
			    	
		            <form class="form-horizontal">

						<div class="input_group">
		                	<input class="form-control input-sm" type="text" name="sUsername" class="text" placeholder="Username" />
						</div>

						<div class="input_group">
		                	<input class="form-control input-sm" type="password" name="sPassword" class="text" placeholder="Password" />
						</div>
						
						<div class="checkbox">
							<label><input type="checkbox" name="remember">Remember Me</label>
						</div>

		                <div id="buttons" class="btn input_group">
			                <a href="#" class="btn btn-default btn-sm">Login</a>
			                <a href="#" class="btn btn-default btn-sm">Sign Up</a>
		                </div>
		            </form>
			    </div>
			</div>
			<div class="col-xs-6 col-md-4">
				<div style="margin:auto;">
					<img src="img/staffs.png" width="100%"/>
				</div>
			</div>
		</div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>

	</div>

	<div class="container-fluid" style="background-color:whitesmoke; color:black;">
		
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>

		<div class="row">
			<div class="col-xs-6 col-md-4">
				<div style="margin:auto;">
					<img src="img/guardian.png" width="100%"/>
				</div>
			</div>
			<div class="col-xs-12 col-md-8"  style="text-align:center;">
				<!-- <img src="img/sm_2.jpg" width="100%"  > -->
				<h1>Guardians</h1>
				<p>Login as Guardian or Parent and edit and retrieve <br> details of your and associated student.</p>

			    <div class="login_box">
			    	
		            <form class="form-horizontal">

						<div class="input_group">
		                	<input class="form-control input-sm" type="text" name="gUsername" class="text" placeholder="Username" />
						</div>

						<div class="input_group">
		                	<input class="form-control input-sm" type="password" name="gPassword" class="text" placeholder="Password" />
						</div>
						
						<div class="checkbox">
							<label><input type="checkbox" name="remember">Remember Me</label>
						</div>

		                <div id="buttons" class="btn input_group">
			                <a href="#" class="btn btn-default btn-sm">Login</a>
			                <a href="#" class="btn btn-default btn-sm">Sign Up</a>
		                </div>
		            </form>
			    </div>
			</div>
		</div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>

	</div>



	<div class="container-fluid">
		
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>

		<div class="row">
			<div class="col-xs-12 col-md-8"  style="text-align:center;">
				<!-- <img src="img/sm_2.jpg" width="100%"  > -->
				<h1>Students</h1>
				<p>Login as Student and edit and retrieve your details and reports. </p>

			    <div class="login_box">
			    	
		            <form class="form-horizontal">

						<div class="input_group">
		                	<input class="form-control input-sm" type="text" name="dUsername" class="text" placeholder="Username" />
						</div>

						<div class="input_group">
		                	<input class="form-control input-sm" type="password" name="dPassword" class="text" placeholder="Password" />
						</div>
						
						<div class="checkbox">
							<label><input type="checkbox" name="remember">Remember Me</label>
						</div>

		                <div id="buttons" class="btn input_group">
			                <a href="#" class="btn btn-default btn-sm">Login</a>
			                <a href="#" class="btn btn-default btn-sm">Sign Up</a>
		                </div>
		            </form>
			    </div>
			</div>
			<div class="col-xs-6 col-md-4">
				<div style="margin:auto;">
					<img src="img/students.png" width="100%"/>
				</div>
			</div>
		</div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>
		<div class="cleaner"></div>

	</div>

	<?php require( 'includes/footer.php' ); ?>

</body>
</html>