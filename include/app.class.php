<?php
class app extends controller{
	public function __construct(){
		$parms = $this->fixParms(explode("/", $_SERVER["REQUEST_URI"]));

		$controller = "home";

		if(isset($parms[0])){
			if(file_exists("./include/controllers/".$parms[0].".class.php")){
				$controller = $parms[0];

				unset($parms[0]);
				$parms = $this->fixParms($parms);
			}
			else
			{
				$stranica = $this->loadModel("stranica");

				$stranice = $stranica->selectByArgument("shortname", $parms[0]);

				if(count($stranice) == 1){
					$controller = "strana_controller";
				}
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
