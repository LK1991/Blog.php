<?php
	require_once(__DIR__ . "/../model/config.php");

	//  The FILTER_SANITIZE_EMAIL removes all illegal e-mail characters from a string.
	// The FILTER_SANITIZE_STRING strips or encodes unwanted characters.
	$email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
	$password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

	// This is echoing out what you put in the register form.
	echo $email . " - " . $username . " - " . $password;