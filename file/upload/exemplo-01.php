<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">
	<button>UPLOAD</button>
</form>

<?php 

	$directory = "images";

	if($_SERVER['REQUEST_METHOD'] === 'POST') {

		if(!is_dir($directory)) {
			mkdir($directory);
		}

		$file = $_FILES['fileUpload'];
		$file_type = $file['type'];
		$expload_file = explode("/", $file_type);
		$type = end($expload_file);
		$type_acess = array("png","jpg","bmp","tiff","gif");

		if($file['error'] == 0){
			if(in_array($type, $type_acess)) {

				$name_file = md5( date("d/m/Y H:i:s") . $file['name'] ).".".$type;

				if(move_uploaded_file($file['tmp_name'], $directory.DIRECTORY_SEPARATOR.$name_file)){
					echo "Upload da imagem <b>$name_file</b> realizado com sucesso!";
				} else {
					echo "Não foi possivel realizar o upload da sua imagem.</br>Tente novamente mais tarde.";
				}

			} else {
				echo "O arquivo inviado deve ser uma imagem do formato: " . implode(", ", $type_acess); 
			}
		} else {
			echo "Houve um erro ao carregar o seu arquivo. Tente novamente.";
		}

	}

?>

<ul>
<?php 
	if(is_dir($directory)) {
		$files = scandir($directory);
		foreach($files as $file) {
			if(!in_array($file,array(".",".."))) {
				echo '<li><img src="'. $directory.DIRECTORY_SEPARATOR.$file .'" width="200px" /></li>';
			}
		}
	}
?>
</ul>