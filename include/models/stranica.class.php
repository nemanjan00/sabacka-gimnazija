<?php
class stranica extends database{
	public function __construct(){
		parent::__construct();

		$this->table = "stranica";
	}
}
