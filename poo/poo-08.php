<?php 

	class Empresa {
		public $empresa;
		public $funcionario;
		public $cargos;

		public function __construct() {
			$this->empresa = "StudioLunnar";
		}

		public function contratar($pessoa, $trabalho, $salario) {
			$this->funcionario = (object) $pessoa;
			$this->funcionario->trabalho($this->empresa, $trabalho, $salario);
			$this->cargos += 1;
		}

		public function pagar() {
			$this->funcionario->recebe($this->funcionario->salario);
		}
	}

	class Pessoa {
		public $nome;
		public $trabalho;
		public $salario;
		public $empresa;
		public $conta = 0;

		public function __construct($nome) {
			$this->nome = $nome;
		}

		public function trabalho($empresa, $trabalho, $salario) {
			$this->empresa = $empresa;
			$this->trabalho = $trabalho;
			$this->salario = $salario;
		}

		public function recebe($valor) {
			$this->conta += $valor;
		}
	}

	$pedro = new Pessoa("Pedro Quezado");

	$sl = new Empresa;
	$sl->contratar($pedro, "Programador", 1000);
	$sl->pagar(); // Janeiro
	$sl->pagar(); // Fevereiro

	var_dump($pedro, $sl);

	function __autoload($nameClass) {
		$filename = "class".DIRECTORY_SEPARATOR.$nameClass.".class.php";
		if(file_exists($filename)) {
			require_once($filename);
		}
	}
?>
