<form method="POST" enctype="multipart/form-data">
	<input type="file" name="fileUpload">
	<button>UPLOAD</button>
</form>

<?php 

	$directory = "images"; // DIRETÓRIO DAS IMAGENS

	if($_SERVER['REQUEST_METHOD'] === 'POST') { // VERIFICA SE FOIR SOLICITADO UM POST

		if(!is_dir($directory)) { // VERIFICA SE NÃO EXISTE O DIRETÓRIO
			mkdir($directory); // CASO NÃO EXISTA O SISTEMA CRIA
		}

		$file = $_FILES['fileUpload']; // ARRAY COM DADOS DO ARQUIVO {nome, tipo, tamanho, local temporario e erro}
		$file_type = $file['type']; // ARMAZENA O TIPO DO ARQUIVO EX.: image/png
		$expload_file = explode("/", $file_type); // SEPARA A STRING ENTRE AS "/" FORMANDO UM ARRAY COM A FUNÇÃO EXPLODE
		$type = end($expload_file); // PEGA O ULTIMO VALOR DO ARRAY COM A FUNÇÃO END
		$type_acess = array("png","jpg","bmp","tiff","gif"); // ARRAY COM OS TIPOS DE FORMATOS PERMITIDOS

		if($file['error'] == 0){ // SE NO ARQUIVO NÃO FOR ENCONTRADO NENHUM ERROR
			if(in_array($type, $type_acess)) { // VERIFICA SE O FORMATO DO ARQUIVO ESTA ENTRE OS FORMATOS PERMITIDOS

				$name_file = md5( date("d/m/Y H:i:s") . $file['name'] ).".".$type; // GERA UM NOME UNICO PARA A IMAGEM COM SEU RESPEQUITIVO FORMATO

				if(move_uploaded_file($file['tmp_name'], $directory.DIRECTORY_SEPARATOR.$name_file)){ // SE FOR REALIZADO O UPLOAD
					echo "Upload da imagem <b>$name_file</b> realizado com sucesso!"; // RETORNA A MENSAGEM..
				} else { // CASO UPLOAD NÃO SEJA REALIZADO
					echo "Não foi possivel realizar o upload da sua imagem.</br>Tente novamente mais tarde."; // RETORNA A MENSAGEM..
				}

			} else { // CASO O FORMATO DO ARQUIVO NÃO ENTREGA ENTRE OS PERMITIDOS
				echo "O arquivo inviado deve ser uma imagem do formato: " . implode(", ", $type_acess); // RETORNA A MENSAGEM..
			}
		} else { // SE NO ARQUIVO FOR ENCONTRADO ALGUM ERROR
			echo "Houve um erro ao carregar o seu arquivo. Tente novamente.";
		}

	}

?>

<ul>
<?php 
	if(is_dir($directory)) { // SE EXISTIR O DIRETÓRIO
		$files = scandir($directory); // ESCANEA A PASTA
		foreach($files as $file) { // PERCORRE O ARRAY COM OS NOMES DOS ARQUIVOS 
			if(!in_array($file,array(".",".."))) { // ELIMINA AS PASTAS RAIZES
				echo '<li><img src="'. $directory.DIRECTORY_SEPARATOR.$file .'" width="200px" /></li>'; // RETORNA A MENSAGEM..
			}
		}
	}
?>
</ul>
