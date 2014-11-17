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

// 
	public function __construct($host, $username, $password, $database) {
		$this->host = $host;
		$this->username = $username;
		$this->password = $password;
		$this->database = $database;
	}

	public function openConnection() {

	}

	public function closeConnection() {

	}

	public function query($string) {

	}
}