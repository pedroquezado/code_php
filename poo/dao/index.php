<?php 
	require_once("config.php");

	$newUser = array(
			":login" => "anitquezado",
			":senha" => "987654321",
			":idade" => 4
		);

	$stmt = new Usuarios;

	//$stmt->loadById(3);
	//echo $stmt;

	//$stmt->delete();
	$users = $stmt->getList();
	echo json_encode($users);
	
	//$stmt->insert($newUser);
	//$users = $stmt->getList();
	//echo json_encode($users);

	//$users = Usuarios::search("le");
	//echo json_encode($users);

	/*
	$noticia = new Noticias;
	//$noticia->loadById(2);
	//echo $noticia;
	$query = $_GET['q'];
	$rows = Noticias::searchNews($query);
	echo json_encode($rows);
	*/
?>