<?php
	// It calls the database.php file
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password);

	// If you get an error, it will print out an error.
	if($connection->connect_error) {
		die("Error: " . $connection->connect_error);
	}

	// This is going to try and access a database that exists on the server.
	$exists = $connection->select_db($database);

	// This will create a database.
	if(!$exists) {
		$query = $connection->query("CREATE DATABASE $database");
	
	// and this will echo out if the database was created successfully.
		if($query) {
			echo "Successfully created database: " . $database;
		}
	} 
	// this echos out that the database has already been added.
	else {
		echo "Database already exists.";
	}

	$connection->close(); 