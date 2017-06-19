<?php 	

	// HERENÇA

	class Documento {
		private $numero;

		public function setNumero($newNumero) {
			$this->numero = $newNumero;
		}

		public function getNumero() {
			return $this->numero;
		}
	}

	class cpf extends Documento {
		public function valida():bool {
			return true;
		}
	}

	$doc = new cpf;
	$doc->setNumero(12345678910);
	echo $doc->getNumero();
	echo "<br>";
	var_dump($doc->valida());

 ?>