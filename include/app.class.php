<?php
class app{
	public function __construct($content){
		require("./include/controllers/home.class.php");

		$controller = new home();
	}
}
