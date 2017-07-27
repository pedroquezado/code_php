<?php 

	header("Content-type: image/png"); // FECHAMENTO DO ARQUIVO

	$image = imagecreate(256,256); // VARIAVEL RESOUCER = PARANETROS EM PIXEL

	$black = imagecolorallocate($image, 0,0,0); // COR DE FUNDO

	$red = imagecolorallocate($image, 255,0,0); // COR PARA O TEXTO

	imagestring($image,5,60,120,"Curso de PHP 7",$red);

	imagepng($image);

	imagedestroy($image);

?>