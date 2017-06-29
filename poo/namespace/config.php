<?php 

	function __autoload($nameClass){
		$directory = "class". DIRECTORY_SEPARATOR . $nameClass.".class.php";
		if(file_exists($directory)) {
			require_once($directory);
		}
	}

 ?>