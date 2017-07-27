<?php 

	try {

		throw new Exception("Error Processing Request", 1);

	} catch(Exception $e) {

		echo json_encode(array(
			"Message" => $e->getMessage(),
			"Code" => $e->getCode(),
			"Line" => $e->getLine(),
			"File" => $e->getFile()
		));

	}

?>