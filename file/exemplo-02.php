<?php 

	$file = "teste.txt";

	if(file_exists($file)){
		unlink($file);
		echo "Arquivo $file apagado com sucesso!";
	} else {
		echo "Arquivo $file não existe, ou já foi deletado.";
	}

?>