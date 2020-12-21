<?php
$servername = "localhost";
$username = "eschool";
$password = "";
$database = "schooldb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);


// Check connection
if (!$conn) {
    die('Could not connect to MySQL '.
		mysqli_connect_error());
}
echo "Connected successfully";
?>
