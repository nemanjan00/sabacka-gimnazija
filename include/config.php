<?php
class config{
	private $config = Array();

	public function __construct(){
		$this->config["pullzone"] = "https://gimnazija-113b.kxcdn.com/";
		$this->config["pushzone"] = "https://gimnazija-113b.kxcdn.com/img/";
	}

	public function readValue($name){
		return $this->config[$name];
	}
}

$config = new config();
