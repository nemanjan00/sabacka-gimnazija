<?php
class database{
	private $config;
	private $db;
	protected $table;

	public function __construct(){
		$this->config = new config();

		$host = $this->config->readValue("db")["host"];
		$user = $this->config->readValue("db")["user"];
		$pass = $this->config->readValue("db")["pass"];
		$path = substr($this->config->readValue("db")["path"], 1);

		$this->db = new PDO("pgsql:dbname=$path;host=$host;user=$user;password=$pass");
	}

	public function getDB(){
		return $this->db;
	}

	public function selectAll(){
		$STH = $this->db->query('SELECT * FROM '.$this->table);

		$STH->setFetchMode(PDO::FETCH_OBJ);

		$result = Array();

		while($row = $STH->fetch()) {
			$result[] = $row;
		}

		return $result;
	}
}
?>
