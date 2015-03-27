<?php
class controller{
	private $resources;
	private $database;

	public function __construct(){
		$this->resources = new resources();
	}

	public function getStaticResource($name){
		return $this->resources->getStaticResource($name);
	}

	public function getDynamicResource($name){
		return $this->resources->getDynamicResource($name);
	}

	public function loadView($name){
		if(!class_exists($name)){
			require_once("./include/views/$name.class.php");
		}

		$view = new $name();

		return $view;
	}

	public function loadModel($name){
		if(!class_exists($name)){
			require_once("./include/models/$name.class.php");
		}
		
		$view = new $name();

		return $view;
	}

	/**
	 * shortens the supplied text after last word
	 * @param string $string
	 * @param int $max_length
	 * @param string $end_substitute text to append, for example "..."
	 * @param boolean $html_linebreaks if LF entities should be converted to <br />
	 * @return string
	 */
	function mb_word_wrap($string, $max_length, $end_substitute = null, $html_linebreaks = true) {
		if($html_linebreaks) $string = preg_replace('/\<br(\s*)?\/?\>/i', "\n", $string);
		$string = strip_tags($string); //gets rid of the HTML

		if(empty($string) || mb_strlen($string) <= $max_length) {
			if($html_linebreaks) $string = nl2br($string);
			return $string;
		}

		if($end_substitute) $max_length -= mb_strlen($end_substitute, 'UTF-8');

		$stack_count = 0;
		while($max_length > 0){
			$char = mb_substr($string, --$max_length, 1, 'UTF-8');
			if(preg_match('#[^\p{L}\p{N}]#iu', $char)) $stack_count++; //only alnum characters
			elseif($stack_count > 0) {
				$max_length++;
				break;
			}
		}
		$string = mb_substr($string, 0, $max_length, 'UTF-8').$end_substitute;
		if($html_linebreaks) $string = nl2br($string);

		return $string;
	}
}
