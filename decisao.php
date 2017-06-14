<?php 
	header("Content-type: text/html; charset=utf-8");

	$num = 500;
	if($num < 300){
		echo "É MAIOR <br>";
	} else if($num < 600){
		echo "É MENOR <br>";
	} else if($num == 500){
		echo "É IGUAL <br>";
	} else {
		echo "NENHUM";
	}

	switch($num){
		case 100:
			echo "É 100";
			break;
		case 300:
			echo "É 300";
			break;
		case 450:
			echo "É 450";
			break;
		case 500:
			echo "É 500";
			break;
		default:
			echo "Nenhum";
	}

 ?>