<?php 

	// ESTRUTURA DE CLASSE

	class Pessoa {
		public $nome;

		public function falar() {
			return "Ola, meu nome é ".$this->nome;
		}
	}

	$pedro = new Pessoa();
	$pedro->nome = "Pedro";
	echo $pedro->falar();

 ?>