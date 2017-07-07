<?php 

	class Noticias {
		private $id;
		private $titulo;
		private $noticia;
		private $image;
		private $data;

		public function setId($value){
			$this->id = $value;
		}

		public function getId() {
			return $this->id;
		}

		public function setTitulo($value){
			$this->titulo = $value;
		}

		public function getTitulo() {
			return $this->titulo;
		}

		public function setNoticia($value){
			$this->noticia = $value;
		}

		public function getNoticia() {
			return $this->noticia;
		}

		public function setImage($value){
			$this->image = $value;
		}

		public function getImage() {
			return $this->image;
		}

		public function setData($value){
			$this->data = $value;
		}

		public function getData() {
			return $this->data;
		}

		public function loadById($id) {
			$stmt = new SQL;
			$rows = $stmt->select("SELECT * FROM tb_noticias WHERE nid=:id",array(
				":id" => $id
			));
			$this->setRow($rows);
		}

		public static function getListNoticias($order = "nid"):array {
			$stmt = new SQL;
			return $stmt->select("SELECT * FROM tb_noticias ORDER BY $order");
		}

		public static function searchNews($q) {
			$stmt = new SQL;
			return $stmt->select("SELECT * FROM tb_noticias WHERE ntitulo LIKE :query ORDER BY nid", array(
				":query" => "%". $q ."%"
			));
		}

		private function setRow($rows = array()) {
			foreach($rows as $row) {
				$this->setId($row['nid']);
				$this->setTitulo($row['ntitulo']);
				$this->setNoticia($row['nnoticia']);
				$this->setImage($row['nimage']);
				$this->setData(new DateTime($row['ndata']));
			}
		}

		public function __toString() {
			return json_encode(array(
				"nid" => $this->getId(),
				"ntitulo" => $this->getTitulo(),
				"nnoticia" => $this->getNoticia(),
				"nimage" => $this->getImage(),
				"ndata" => $this->getData()->format("d-m-Y H:i")
			));
		}
	}
	
?>