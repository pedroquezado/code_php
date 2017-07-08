<?php 

	function searchClass($nameClass) {
		$directory = "class".DIRECTORY_SEPARATOR.$nameClass.".class.php";
		if(file_exists($directory)){
			require_once($directory);
		}
	}

	spl_autoload_register("searchClass");

?>