<?php
	require_once(__DIR__ . "/../model/config.php");

	//  The FILTER_SANITIZE_EMAIL removes all illegal e-mail characters from a string.
	// The FILTER_SANITIZE_STRING strips or encodes unwanted characters.
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	// The salt variable restricts you from having a weak password.
	$salt = "$5$" . "rounds=5000$" . uniqid(mt_rand(), true) . "$";
	
	// Without hashing, any passwords that are stored in your application's database can be stolen.
	$hashedPassword = crypt($password, $salt);

	// Inserting a post.
	$query = $_SESSION["connection"]->query("INSERT INTO users SET "
		. "email = '$email',"
		. "username = '$username',"
		. "password = '$hashedPassword',"
		. "salt = '$salt'");

	if($query) {
		echo "Successfully created user: $username";
	}
	else {
		echo "<p>" . $_SESSION["connection"]->error . "</p>";
	}