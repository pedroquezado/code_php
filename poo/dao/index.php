<?php 
	require_once("config.php");

	// CARREGAR UM USUÁRIO
	//$stmt = new Usuarios;
	//$stmt->loadById(1);
	//echo $stmt;


	// RETORNA TODOS OS USURIOS
	//$stmt = new Usuarios;
	//$users = Usuarios::getList();
	//echo json_encode($users);


	// PROCURA POR UM USUÁRIO
	//$stmt = new Usuarios;
	//$search = Usuarios::search("pe");
	//echo json_encode($search);


	// DELETAR UM USUARIO
	//$stmt = new Usuarios;
	//Usuarios::delete(5);
	//$users = Usuarios::getList();
	//echo json_encode($users);


	/*
	// INSERIR UM NOVO USUÁRIO
	$newUser = array(
		"ulogin" => "anitaquezado",
		"usenha" => "8ask94r2q"
	);
	$stmt = new Usuarios;
	Usuarios::insert($newUser);
	$users = Usuarios::getList();
	echo json_encode($users);
	*/

	/*
	// AUTALIZA UM USUÁRIO
	$upUser = array(
		":login" => "pedro__quezado",
		":senha" => "96851222",
		":id" => 1
	);
	$stmt = new Usuarios;
	Usuarios::update($upUser);
	$users = Usuarios::getList();
	echo json_encode($users);
	*/
?>