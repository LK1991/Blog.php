<?php
	// It calls the database.php file and almost everything in it.
	// Fixed the code because everything in database.php moved to config.php
	require_once(__DIR__ . "/../model/config.php");

	// It's making a table post and putting an id in it automatically, a text that can only have 255 characters, and the post is text. None of them can be NULL. And the primary key is id.
	$query = $_SESSION["connection"]->query("CREATE TABLE posts ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "title varchar(255) NOT NULL,"
		. "post text NOT NULL,"
		. "DateTime datetime NOT NULL,"
		. "PRIMARY KEY (id))");

	if($query) {
		echo "<p>Successfully create table: posts</p>";
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
	// A session is a way to store information in variables to be used across multiple pages.
	// And this echos if it was created successfully.

	// It's making a table post and putting an id in it automatically, a text that can only have 255 characters, and the post is text. None of them can be NULL. And the primary key is id.
	$query = $_SESSION["connection"]->query("CREATE TABLE users ("
		. "id int(11) NOT NULL AUTO_INCREMENT,"
		. "username varchar(30) NOT NULL,"
		. "email varchar(50) NOT NULL,"
		. "password char(128) NOT NULL,"
		. "salt char(128) NOT NULL,"
		. "PRIMARY KEY (id))");

	if($query) {
		echo "<p>Successfully created table:users</p>";
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}
	// A session is a way to store information in variables to be used across multiple pages.
	// And this echos if it was created successfully.