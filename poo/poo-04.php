<?php 	

	// METODOS MAGICOS

	class Endereco {
		private $logradouro;
		private $numero;
		private $cidade;

		public function __construct($a, $b, $c) {
			$this->logradouro = $a;
			$this->numero = $b;
			$this->cidade = $c;
		}

		public function __toString() {
			return "Essa é uma classe de dados locais.<br>";
		}

		public function __destruct() {
			echo "Finalização de classe";
		}
	}

	$meuEndereco = new Endereco("Rua Nadir de Medeiros", "351", "Jaboatão dos Guararapes");

	var_dump($meuEndereco)."<br>";

	echo $meuEndereco;

	unset($meuEndereco);

 ?>