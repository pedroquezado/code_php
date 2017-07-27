<?php 

	header("Content-type: image/jpeg");

	$image = imagecreatefromjpeg("php7.jpg");

	$texto = imagecolorallocate($image, 0, 0, 0);

	imagestring($image, 5, 20, 80, "FODA", $texto);

	imagejpeg($image);

	imagedestroy($image);

?>