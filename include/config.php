<?php
class config{
	private $config = Array();

	public function __construct(){
		$this->config["pullzone"] = "//sabackagimnazija.na1424817126.netdna-cdn.com/";
		$this->config["pushzone"] = "//res.cloudinary.com/nemanjan00/image/upload/v1424803852/gimnazija/";
	}

	public function readValue($name){
		return $this->config[$name];
	}
}

$config = new config();
