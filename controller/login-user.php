<?php

	require_once(__DIR__ . "/../model/config.php");

	// The FILTER_SANITIZE_STRING strips or encodes unwanted characters.
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	// This is selecting the salt and the password from the users database in the username column.
	$query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE usernames = '$username'");