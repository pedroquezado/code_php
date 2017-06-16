<?php 

	$date = date("l, d/m/Y H:i:s");

	echo $date;

	echo "<br>";

	echo time();

	echo "<br>";

	echo strtotime("+1 week");

	////////////////////////////////////

	echo "<br>";

	setLocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');

	echo strftime("%A, %B");

	echo "<br>";

	/////////////////////////////////// 


	$dt = new DateTime();

	echo $dt->format("d/m/Y H:i:s");
	
 ?>