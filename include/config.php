<?php
class config{
	private $config = Array();

	public function __construct(){
		$this->config["pullzone"] = "https://gimnazija-113b.kxcdn.com/";
		//$this->config["pullzone"] = "/";
		$this->config["pushzone"] = "https://cloudinary-113b.kxcdn.com/";
	}

	public function readValue($name){
		return $this->config[$name];
	}
}

$config = new config();
