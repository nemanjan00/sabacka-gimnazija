<?php
class config{
	private $config = Array();

	public function __construct(){
		$this->config["pullzone"] = "//cdn.sabackagimnazija.edu.rs/";
		$this->config["pushzone"] = "//cloudinary.na1424817126.netdna-cdn.com/";
	}

	public function readValue($name){
		return $this->config[$name];
	}
}

$config = new config();
