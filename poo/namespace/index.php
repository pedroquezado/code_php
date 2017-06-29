<?php 

	require_once("config.php");

	use Cadastro\Cadastro;

	$obj = new Cadastro;
	$obj->setNome("Pedro Quezado");
	$obj->setEmail("lucas.pedro.n@hotmail.com");
	$obj->setSenha("123456");

	echo $obj->resultadoVendas();

 ?>