<?php
	// It's calling the database.php file and everything in it.
	require_once(__DIR__ . "/../model/database.php");

	$connection = new mysqli($host, $userame, $password, $database);

	// There are filtering the input, getting it from a post that we are submitting, make it so we're getting it from title and post, and it's filtering it making sure it's a string.
	$title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_STRING);
	$post = filter_input(INPUT_POST, "post", FILTER_SANITIZE_STRING);

	echo "<p>Title: $title</p>";
	echo "<p>Post: $post</p>";

	$connection->close();
	// That is closing the connection.