<?php 

	$file = "teste.txt";
	$conteudo = date("d/m/Y H:i:s")."\r\n";

	$open = fopen($file,"a+");
	fwrite($open,$conteudo);
	fclose($open);

	echo "Arquivo criado com sucesso!";

?>