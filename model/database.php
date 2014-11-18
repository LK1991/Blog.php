<?php
// A class holds a bunch of code and relevant data together, isolated from everything else. 
// It makes it easier to change the code around without disrupting other code, without affecting other classes.
// You can call it anytime because it's an object.
class Database {
	private $connection;
	private $host;
	private $username;
	private $password;
	private $database;

// This is storing variables into a construct function.
	public function __construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}

	public function openConnection() {
		$this->connection = new mysqli($this->host, $this->username, $this->password);

	// If you get an error, it will print out an error.
	if($this->connection->connect_error) {
		die("<p>Error: " . $this->connection->connect_error . "</p>");
	}
	}

	public function closeConnection() {

	}

	public function query($string) {

	}
}