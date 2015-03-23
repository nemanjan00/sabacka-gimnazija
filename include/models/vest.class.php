<?php
class vest extends database{
	public function __construct(){
		parent::__construct();

		$this->table = "vesti";
	}
}
