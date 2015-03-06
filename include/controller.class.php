<?php
class controller{
	private $resources;

	public function __construct(){
		$this->resources = new resources();
	}

	public function getStaticResource($name){
		return $this->resources->getStaticResource($name);
	}

	public function getDynamicResource($name){
		return $this->resources->getDynamicResource($name);
	}
}
