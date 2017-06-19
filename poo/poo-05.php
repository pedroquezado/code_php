<?php 

	// ENCAPSULAMENTO

	class Pessoa {
		public $nome = "Pedro"; // PODE SER ACESSADA PELA CLASSE MÃE, CLASSE HERDADA E ATRAVEZ DO OBJETO;
		protected $idade = 21; // PODE SER ACESSADA APENAS PELA CLASSE MÃE E CLASSE HERDADA;
		private $senha = "123456"; // PODE SER ACESSADA SOMENTE ATRAVEZ DA CLASSE MÃE;

		// RETORNARÁ TODAS AS PROPIEDADES PORQUE O METODO QUE RETORNA OS VELORES É PUBLICO
		public function getDados() {
			echo $this->nome . "<br>";
			echo $this->idade . "<br>";
			echo $this->senha . "<br>";
		}
	}


	class Programador extends Pessoa {
		public function getDados() {
			echo $this->nome . "<br>";
			echo $this->idade . "<br>";
			echo $this->senha . "<br>"; // Não retornara o valor, pois classe herdada não retorna valores privados das classe mãe
		}
	}

	$obj = new Programador;

	echo $obj->nome."<br>";
	//echo $obj->idade."<br>";
	//echo $obj->senha."<br>";

	$obj->getDados();

 ?>