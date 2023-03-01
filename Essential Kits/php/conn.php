<?php
	$host = "localhost";
	$user = "root";
	$pass = "";
	$db = "librarysystem";
	
	$conn = new mysqli($host, $user, $pass, $db);
	if($conn->connect_error){
		echo "Failed To Connect to database!! Seems like you've not configured the Database properly, please check the connection..." . $conn->connect_error;
	}
?>