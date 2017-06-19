<?php 

	// INTERFACE

	/*
	* Utilizado para propor regras nas classes que as implementão
	* EX: Se criar uma interface com um metodo publico com tao nome,
	* é obrigatorio que em sua classe que a implemente tenha o mesmo metodo
	* com o mesmo nome e visibilidade;
	*
	* Só é possivel estabelecar em interfaces metodos e constantes;
	*/

	interface Pessoa {
		public function setNome($nome);
		public function falar();
		public function andar($velocidade);
		public function comer($comida);
	}

	class Pedro implements Pessoa {
		private $nome;

		public function setNome($newValue) {
			$this->nome = $newValue;
		}

		public function falar() {
			echo "Meu nome é ". $this->nome .".<br>";
		}

		public function andar($velocidade) {
			echo $this->nome." está caminhando a ".$velocidade." km/h<br>";
		}

		public function comer($comida) {
			echo $this->nome." gosta de comer: ".$comida."..<br>";
		}
	}

	$pedro = new Pedro;
	$pedro->setNome("Pedro Quezado");
	$pedro->falar();
	$pedro->andar(10);
	$pedro->comer("Feijão, Macarrão e galinha");

 ?>