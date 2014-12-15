<?php
	// Requiring file.
	require_once(__DIR__ . "/../model/config.php");

	// It's authenticating the user.
	function authenticateUser() {
		if(!isset($_SESSION["authenticated"])) {
			return false;
		}
		else {
			if($_SESSION["authenticated"] != true) {
				return false;
			}
			else {
				return true;
			}
		}
	}