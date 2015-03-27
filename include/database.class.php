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
		$STH = $this->db->prepare("SELECT * FROM ".$this->table);

		$STH->execute();

		$result = Array();

		foreach ($STH as $row) {
			$result[] = $row;
		}

		return $result;
	}

	public function selectByID($id){
		return $this->selectByArgument("id", $id);
	}

	public function selectByArgument($argument, $value){
		$STH = $this->db->prepare("SELECT * FROM ".$this->table." WHERE $argument=:value");

		$STH->execute(Array('value' => $value));

		$result = Array();

		foreach ($STH as $row) {
			$result[] = $row;
		}

		return $result;
	}
}
?>
