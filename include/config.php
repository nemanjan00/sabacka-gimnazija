<?php
class config{
	private $config = Array();

	public function __construct(){
		$this->config["pullzone"] = getenv("pullzone");

		$this->config["pushzone"] = getenv("pushzone");

		$this->config["AWS_ACCESS_KEY_ID"] = getenv("AWS_ACCESS_KEY_ID");
	}

	public function readValue($name){
		return $this->config[$name];
	}
}

$config = new config();
