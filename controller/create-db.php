<?php
	// It calls the database.php file and almost everything in it.
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $username, $password);

	// If you get an error, it will print out an error.
	if($connection->connect_error) {
		die("<p>Error: " . $connection->connect_error . "</p>");
	}

	// This is going to try and access a database that exists on the server.
	$exists = $connection->select_db($database);

	// This will create a database.
	if(!$exists) {
		$query = $connection->query("CREATE DATABASE $database");
	
	// And this will echo out if the database was created successfully.
		if($query) {
			echo "<p>Successfully created database: " . $database . "</p>";
		}
	} 
	// This echos out that the database has already been added.
	else {
		echo "<p>Database already exists.</p>";
	}

	// It's making a table post and putting an id in it automatically, a text that can only have 255 characters, and the post is text. None of them can be NULL. And the primary key is id.
	$query = $connection->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "PRIMARY KEY (id))");

	if($query) {
		echo "<p>Successfully create table: posts</p>";
	}
	else {
		echo "<p>$connection->error</p>";
	}
	$connection->close();
	// That is closing the connection.
