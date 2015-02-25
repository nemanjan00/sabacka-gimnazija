<?php
class config{
	private $config = Array();

	public function __construct(){
		$this->config["pullzone"] = "//cdn.sabackagimnazija.edu.rs/";
		$this->config["pushzone"] = "//cdn.sabackagimnazija.edu.rs/img/";
	}

	public function readValue($name){
		return $this->config[$name];
	}
}

$config = new config();
