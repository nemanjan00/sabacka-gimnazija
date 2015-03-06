<?php
class resources{
	private $config;

	public function __construct(){
		$this->config = new config();
	}

	public function getStaticResource($name){
		return $this->config->readValue("pullzone").$name;
	}

	public function getDynamicResource($name){
		return $this->config->readValue("pushzone").$name;
	}
}

$resources = new resources();
