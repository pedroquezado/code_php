<?php 

	class PrincipalNoticia extends Noticia {
		public $thumb;

		public function setThumb($valor) {
			$this->thumb = $valor;
		}

		public function setTexto($valor) {
			$this->texto = $valor;
		}

		public function exibirNoticia() {
			return 	"<div style=\"margin: 20px auto; max-width: 500px; padding-bottom: 10px; text-align: center; border-bottom: 1px solid;\">
						<img src=\"". $this->thumb ."\" width=\"100%\" />
						<h2>". $this->titulo ."</h2>
						<p>". $this->texto ."</p>
					</div>";
		}
	}

 ?>