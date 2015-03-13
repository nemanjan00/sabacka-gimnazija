<?php
class database{
	private $config;
	private $db;

	public function __construct(){
		$this->config = new config();

		$dbname = $this->config->readValue("db")["dbname"];
		$host = $this->config->readValue("db")["host"];
		$user = $this->config->readValue("db")["user"];
		$pass = $this->config->readValue("db")["pass"];
		$path = substr($this->config->readValue("db")["path"], 1);

		$this->db = new PDO("pgsql:dbname=$dbname;host=$host;user=$user;password=$password");
	}

	public function getDB(){
		return $this->db;
	}
}
?>
