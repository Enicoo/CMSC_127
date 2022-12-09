<?php

    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "database127";
	

	//Ths is the connection
	$conn = new mysqli($servername, $username, $password, $dbname);



	//Check Connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		
	}
?>