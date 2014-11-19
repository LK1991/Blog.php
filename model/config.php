<?php
// This is keeping all the files in one page so you won't have to update anything. 
	$path = "/blog-php/";

// Moved the variables from database.php here to save space.
	$host = "localhost";
	$username = "root";
	$password = "root";
	$database = "blog_db"; 

// Connecting a new database but with the same variables and it's putting all the repeated code in other files in one place.
	$connection = new Database($host, $username, $password, $database);