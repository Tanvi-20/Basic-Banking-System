<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "tsf bank";

	$conn1 = mysqli_connect($servername, $username, $password, $dbname);

	if(!$conn1){
		die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
	}

?>