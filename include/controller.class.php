<?php
class controller{
	private $resources;
	private $database;

	public function __construct(){
		$this->resources = new resources();
		//$this->database = new database();
	}

	public function getStaticResource($name){
		return $this->resources->getStaticResource($name);
	}

	public function getDynamicResource($name){
		return $this->resources->getDynamicResource($name);
	}

	public function loadView($name){
		require("./include/views/$name.class.php");
		$view = new $name();

		return $view;
	}
}
