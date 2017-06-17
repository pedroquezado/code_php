<?php 

	class Carro {
		private $modelo;
		private $motor;
		private $ano;

		public function setModelo($newModelo) {
			$this->modelo = $newModelo;
		}

		public function getModelo() {
			return $this->modelo;
		}

		public function setMotor($newMotor) {
			$this->motor = $newMotor;
		}

		public function getMotor():float {
			return $this->motor;
		}

		public function setAno($newAno) {
			$this->ano = $newAno;
		}

		public function getAno():int {
			return $this->ano;
		}

		public function exibir() {
			return array(
					"modelo"=>$this->getModelo(),
					"motor"=>$this->getMotor(),
					"ano"=>$this->getAno()
				);
		}
	}

	$fiat = new Carro();
	$fiat->setModelo("UNO");
	$fiat->setMotor(3.4);
	$fiat->setAno(2017);

	var_dump($fiat->exibir());

 ?>