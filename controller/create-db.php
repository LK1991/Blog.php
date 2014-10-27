<?php
	// It calls the database.php file
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password);

	// If you get an error, it will print out an error.
	if($connection->connect_error) {
		die("Error: " . $connection->connect_error);
	}
	// If it is a success, it will echo out "Success".
	else {
		echo "Success: " . $connection->host_info;
	}

	$connection->close();