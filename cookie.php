<?php 

	if(!isset($_COOKIE['TESTEt'])){
		setcookie("TESTEt", date("d/m/Y H:i:s"), time() + 3600 * 2);
		echo "Cookie criado com sucesso!";
	} else {
		$teste = $_COOKIE['TESTEt'];
		print_r($teste);
	}

?>