<?php
//require( 'config.php' );
//require( 'includes/link.php' );
//	session_start();

//from another
         
  if(isset($_POST["loginA"])) {

    $a_username = $_POST['aUsername'];
    $a_password = $_POST['aPassword'];
	
	
require 'config.php';
require( 'includes/link.php' );

	//admin validation

	$a_sql = "SELECT  * FROM admins";

    $a_query =  mysqli_query($link , $a_sql ) 
    or die("Failed to query database".mysql_error());



if (mysqli_num_rows($a_query) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($a_query)) {
		
		if ($row['username'] == $a_username && $row['legal'] == '1') {
		
       header('Location: adminpage.php');
       exit;

		} else {

      echo "<h3 style='font-weight: bold; color: red; text-align: center;'>Invalid User Found!</h3>";
		}
    }
} else {
    
      echo "12346";
}


mysqli_close($link);    
	
    }
         

  if(isset($_POST["loginS"])) {
    $s_username = $_POST['sUsername'];
    $s_password = $_POST['sPassword'];
	
	
	require 'config.php';
	require( 'includes/link.php' );


	// staff validation

	$s_sql = "SELECT  * FROM staff";

    $s_query =  mysqli_query($link , $s_sql ) 
    or die("Failed to query database".mysql_error());



if (mysqli_num_rows($s_query) > 0) {
    // output data of each row
    while($row2 = mysqli_fetch_assoc($s_query)) {
		
		if ($row2['username'] == $s_username && $row2['legal'] == '1') {
		
       header('Location: staffpage.php');
       exit;

		} else {

      echo "<h3 style='font-weight: bold; color: red; text-align: center;'>Invalid User Found!</h3>";
		}
    }
} else {
    
      echo "12346";
}




mysqli_close($link);    
	
    }

    // guardian validation
         

	  if(isset($_POST["loginG"])) {
	    $g_username = $_POST['gUsername'];
	    $g_password = $_POST['gPassword'];
		
		
		require 'config.php';
		require( 'includes/link.php' );

		$g_sql = "SELECT  * FROM guardians";

	    $g_query =  mysqli_query($link , $g_sql ) 
	    or die("Failed to query database".mysql_error());



	if (mysqli_num_rows($g_query) > 0) {
	    // output data of each row
	    while($row3 = mysqli_fetch_assoc($g_query)) {
			
			if ($row3['username'] == $g_username && $row3['legal'] == '1') {
			
	       header('Location: guardianpage.php');
	       exit;

			} else {

	      echo "<h3 style='font-weight: bold; color: red; text-align: center;'>Invalid User Found!</h3>";
			}
	    }
	} else {
	    
	      echo "12346";
	}




	mysqli_close($link);    
		
    }

// student validation
         

	  if(isset($_POST["loginB"])) {
	    $b_username = $_POST['bUsername'];
	    $b_password = $_POST['bPassword'];
		
		
		require 'config.php';
		require( 'includes/link.php' );

		$b_sql = "SELECT  * FROM students";

	    $b_query =  mysqli_query($link , $b_sql ) 
	    or die("Failed to query database".mysql_error());



	if (mysqli_num_rows($b_query) > 0) {
	    // output data of each row
	    while($row4 = mysqli_fetch_assoc($b_query)) {
			
			if ($row4['username'] == $b_username && $row4['legal'] == '1') {
			
	       header('Location: studentpage.php');
	       exit;

			} else {

	      echo "<h3 style='font-weight: bold; color: red; text-align: center;'>Invalid User Found!</h3>";
			}
	    }
	} else {
	    
	      echo "12346";
	}




	mysqli_close($link);    
		
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
			<li><a href="about.php">About</a></li>
			<li><a href="contact.php">Contact</a></li>
		    <li><a href="news.php">News</a></li>
			<li class="active"><a href="index.php">Home</a></li>
		</ul>

		<?php //require( 'includes/sidenav.php' ); ?>
		
	</div>

	<div class="cleaner"></div>
	<div class="cleaner"></div>
	<div class="cleaner"></div>
	<div class="cleaner"></div>


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
			                <input type="submit" name="loginA" value="Login" class="btn btn-default btn-sm">
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
			    	
		            <form class="form-horizontal" action="" method="POST">

						<div class="input_group">
		                	<input class="form-control input-sm" type="text" name="sUsername" class="text" placeholder="Username" />
						</div>

						<div class="input_group">
		                	<input class="form-control input-sm" type="password" name="sPassword" class="text" placeholder="Password" />
						</div>
						

		                <div id="buttons" class="btn input_group">
			                <input type="submit" name="loginS" value="Login" class="btn btn-default btn-sm">
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
			    	
		            <form class="form-horizontal" action="" method="POST">

						<div class="input_group">
		                	<input class="form-control input-sm" type="text" name="gUsername" class="text" placeholder="Username" />
						</div>

						<div class="input_group">
		                	<input class="form-control input-sm" type="password" name="gPassword" class="text" placeholder="Password" />
						</div>
						

		                <div id="buttons" class="btn input_group">
			                <input type="submit" name="loginG" value="Login" class="btn btn-default btn-sm">
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
			    	
		            <form class="form-horizontal" action="" method="POST">

						<div class="input_group">
		                	<input class="form-control input-sm" type="text" name= "bUsername" class="text" placeholder="Username" />
						</div>

						<div class="input_group">
		                	<input class="form-control input-sm" type="password" name= "bPassword" class="text" placeholder="Password" />
						</div>

		                <div id="buttons" class="btn input_group">
			                <input type="submit" name="loginB" value="Login" class="btn btn-default btn-sm">
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