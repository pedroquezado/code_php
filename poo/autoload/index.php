<?php 

	header("Content-type: text/html; charset=utf-8");

	function __autoload($nameClass) {
		$directory = "class" . DIRECTORY_SEPARATOR . $nameClass.".class.php";
		if(file_exists($directory)) {
			require_once($directory);
		}
	}

	$image = "https://cdn-images-1.medium.com/max/2000/1*e-UKLAocP0HB3X1QyvUc7w.jpeg";
	$titulo = "Fazendo autoload de classes no PHP";
	$texto = "Aprenda a fazer o carregamento de suas classes no PHP de forma fácil e eficiente utilizando as funções da SPL (Standard PHP Library).";

	$obj = new PrincipalNoticia;
	$obj->setThumb($image);
	$obj->setTitulo($titulo);
	$obj->setTexto($texto);
	echo $obj->exibirNoticia();

 ?>