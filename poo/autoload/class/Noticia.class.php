<?php 

	interface iNoticia {
		public function setTitulo($valor);
		public function setTexto($valor);
		public function exibirNoticia();
	}

	abstract class Noticia implements iNoticia {
		protected $titulo;
		protected $texto;

		public function setTitulo($valor) {
			$this->titulo = $valor;
		}

		abstract public function setTexto($valor);
		abstract public function exibirNoticia();
	}

 ?>