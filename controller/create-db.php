<?php
	// It calls the database.php file
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password);

	// If you get an error, it will print out an error.
	if($connection->connect_error) {
		die("Error: " . $connection->connect_error);
	}

	$exists = 

	$connection->close();