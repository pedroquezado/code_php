<?php 

	$directory = "images";
	$files = scandir($directory);
	$json = array();

	foreach($files as $file) {
		if(!in_array($file, array(".",".."))) {
			$filename = $directory.DIRECTORY_SEPARATOR.$file;

			$info = pathinfo($filename);
			$info['size'] = filesize($filename);
			$info['modifile'] = date("d/m/Y H:i", filemtime($filename));
			$info['url'] = "http://127.0.0.1/dir".str_replace("\\","/",$filename);

			array_push($json, $info);
		}
	}

	echo json_encode($json);

?>