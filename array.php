<?php 

	$myArray = array();

	array_push($myArray,"Pedro");
	array_push($myArray,"Eric");
	array_push($myArray,"Anita");
	array_push($myArray,"Rose");

	sort($myArray);
	var_dump($myArray);
	echo "<br>";
	rsort($myArray);
	var_dump($myArray);

	echo "<br><hr><br>";

	echo end($myArray);




 ?>