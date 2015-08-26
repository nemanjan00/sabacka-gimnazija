<?php
class config{
	private $config = Array();

	public function __construct(){
		$this->config["db"] = $this->databaseConfig();
	}

	public function readValue($name){
		if(isset($this->config[$name])){
			return $this->config[$name];
		}
		else
		{
			return getenv($name);
		}
	}

	public function setValue($name, $value){
		$this->config[$name] = $value;
	}

	private function databaseConfig(){
		$db =  parse_url(getenv("DATABASE_URL"));

		if($db["scheme"] == "postgres"){
			$db["scheme"] = "pgsql";
		}

		return $db;
	}
}

$config = new config();
