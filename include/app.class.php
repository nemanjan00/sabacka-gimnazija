<?php
class app{
	public function __construct(){
		$parms = $this->fixParms(explode("/", $_SERVER["REQUEST_URI"]));

		$controller = "home";

		if(isset($parms[0])){
			if(file_exists("./include/controllers/".$parms[0].".class.php")){
				$controller = $parms[0];

				unset($parms[0]);
				$parms = $this->fixParms($parms);
			}
		}

		require("./include/controllers/$controller.class.php");

		$controller = new $controller($parms);
	}

	private function fixParms($explode){
		$parms = Array();

		foreach($explode as $parm){
			if($parm != ""){
				$parms[] = $parm;
			}
		}

		return $parms;
	}
}
