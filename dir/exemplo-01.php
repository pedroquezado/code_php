<?php 
	
	$directory = "images";
	if(!is_dir($directory)){
		mkdir($directory);
		echo "Diretório $directory criando com sucesso.";
	} else {
		echo "Diretório \"$directory\" já existe.";
	}

?>