<?php 

	$file = "teste.txt";

	$open = fopen($file,"r");
	$read = fread($open, filesize($file));
	echo $read;
	fclose($open);

?>