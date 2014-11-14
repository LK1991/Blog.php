<?php
	// It's calling the database.php file and everything in it.
	// Fixed the code because everything in database.php moved to config.php
	require_once(__DIR__ . "/../model/config.php");

	// It's connnecting to the datbase.
	$connection = new mysqli($host, $username, $password, $database);

	// There are filtering the input, getting it from a post that we are submitting, make it so we're getting it from title and post, and it's filtering it making sure it's a string.
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	// This is inserting the post that we put into the database.
	$query = $connection->query("INSERT INTO posts SET title = '$title', post = '$post'");

	// If inserting it was successfull, it will echo out that is was successful and if it wasn't, it'll echo out an error.
	if($query) {
		echo "<p>Successfully inserted post: $title</p>";
	}
	else {
		echo "<p>$connection->error</p>";
	}

	$connection->close();
	// That is closing the connection.    