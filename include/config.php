<?php
class config{
	private $config = Array();

	public function __construct(){
		$this->config["pullzone"] = "https://sabackagimnazija-na1424817126.netdna-ssl.com/";
		//$this->config["pullzone"] = "/";

		$this->config["pushzone"] = "https://s3sabackagimnazija-na1424817126.netdna-ssl.com/";
		//$this->config["pushzone"] = "img/";
	}

	public function readValue($name){
		return $this->config[$name];
	}
}

$config = new config();
