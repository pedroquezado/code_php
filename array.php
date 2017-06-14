<?php


	$pessoas = array();

	array_push($pessoas, "Pedro");
	array_push($pessoas, "Eric");
	array_push($pessoas, "Anita");
	array_push($pessoas, "Rose");
	array_push($pessoas, "Ruth");

	sort($pessoas);

	$quatidade = count($pessoas);
	$rand = rand(0, $quatidade-1);

	echo $pessoas[$rand];

	echo "<br><hr><br>";

	foreach($pessoas as $pessoa){
		echo $pessoa." ";
	}

	echo "<br><hr><br>";

	print_r($pessoas);
	echo "<br>";
	echo json_encode($pessoas);
	echo "<br>";
	$json = '["Anita","Eric","Pedro","Rose","Ruth"]';
	echo json_decode($json);
