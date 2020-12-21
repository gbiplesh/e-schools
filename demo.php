<?php	
function login() {

	if(isset($_POST["login"])) {

				$username = $_POST['aUsername'];
				$password = $_POST['aPassword'];
				
				$_SESSION["aUsername"] = $username;
				$_SESSION["aPassword"] = $password;
							
			}

		$conn = mysqli_connect("localhost", "eschool", "password", "eschool");
				
				if (!$conn) {
					die($conn->connect_error);
				}
			$query = "SELECT * FROM admins WHERE legal = '1'";
			
			$result = mysqli_query($conn, $query) or die("Failed to query database".mysql_error());

			if ( $result && mysqli_num_rows($result) > 0 ) {

				while($admins = mysqli_fetch_assoc($result)) {

					if ($username == $admins['username'] && $password == $admins['password'] &&  $admins['legal'] == 1) {
						echo "logged in" ;
						echo '<div class="alert alert-warning alert-dismissible fade show">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
 								 <strong>Success!</strong> Indicates a successful or sss action.
							</div>

						';
					} else{
						echo '<div class="alert alert-warning">
 								 <strong>Success!</strong> Indicates a successful or positive action.
							</div>

						';
						echo header('Location: index.php');
					}
					 

						}
				}



	
	}					
?>
<html>
<head>
	<title>E-School - Online School Management System</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link href="css/bootstrap_2.css" rel="stylesheet"/>
	<link href="css/bootstrap.min.css" rel="stylesheet"/> -->
	<!-- <link href="js/bootstrap.js" rel="stylesheet">
	<!-- <link href="js/bootstrap.min.js" rel="stylesheet">
	<link href="css/w3.css" rel="stylesheet"/>
	<link href="css/style.css" rel="stylesheet"/>
	<script src="js/script.js"></script> --> -->
	
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
</head>

	<body>
	
		<?php			
			login();
		?>

		
	</body>
</html>