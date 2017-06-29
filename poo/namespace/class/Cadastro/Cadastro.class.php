<?php 
	namespace Cadastro;

	class Cadastro extends \Cadastro {
		public function resultadoVendas() {
			return "Compra finalizada para o cliente ". $this->getNome() .".<br/>";
		}
	}

 ?>