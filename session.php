<?php
	//session_id('5h0di9vbghoi20pedji1pj015f');

	session_start();

	echo session_id() . "<br>";

	//session_regenerate_id();

	if(isset($_SESSION["usuario"])){
		echo "Usuário logado: ".$_SESSION["usuario"]. "<br>";
	} else {
		$_SESSION['usuario'] = "Pedro";
		echo "Usuário acaba de ser registrado. <br>";
	}

	if(isset($_GET['deslogar']) && $_GET['deslogar'] == 'true'){
		session_destroy();

		if($_SESSION['usuario'] == NULL) {
			echo "Usuário deslogado.";
		} else {
			echo "Não foi possivel deslogar o usuario \"".$_SESSION['usuario']."\" de ID: ".session_id()."<br>";
		}
		
	}

	
	echo session_save_path();

	echo "<br>";

	echo session_name();

	echo "<br>";

	echo session_status();
