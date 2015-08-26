<?php
class database{
	protected $db;
	protected $table;
	private $config;

	public function __construct(){
		$this->config = new config();

		$dbc = $this->config->readValue("db");

		$scheme = $dbc["scheme"];
		$host = $dbc["host"];
		$user = $dbc["user"];
		$pass = $dbc["pass"];
		$path = substr($dbc["path"], 1);

		$this->db = new PDO("$scheme:dbname=$path;host=$host;", $user, $pass);
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

	public function selectByArgument($argument, $value, $sort = false, $type = "ASC"){
		return $this->selectByArguments(Array($argument => $value), $sort, $type);
	}

	public function selectByArguments($arguments, $sort = false, $type = "ASC"){
		$clauses = Array();

		foreach($arguments as $argument => $value){
			$clauses[] = "$argument = :$argument";
		}

		if($sort){
			$STH = $this->db->prepare("SELECT * FROM ".$this->table." WHERE  ".implode(" AND ", $clauses)." ORDER BY $sort $type");
		}
		else
		{
			$STH = $this->db->prepare("SELECT * FROM ".$this->table." WHERE  ".implode(" AND ", $clauses));
		}

		$STH->execute($arguments);

		$result = $STH->fetchAll(PDO::FETCH_NAMED);

		return $result;
	}
}
?>
