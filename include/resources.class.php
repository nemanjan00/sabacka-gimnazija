<?php
class resources{
	private $config;

	public function __construct(){
		global $config;
		$this->config = $config;
	}

	public function getStaticResource($name){
		return $this->config->readValue("pullzone").$name;
	}
}

$resources = new resources();
