<?php 

	class Usuarios {
		private $id;
		private $login;
		private $senha;
		private $data;
		private $idade;

		public function setId($value) {
			$this->id = $value;
		}

		public function getId() {
			return $this->id;
		}

		public function setLogin($value) {
			$this->login = $value;
		}

		public function getLogin() {
			return $this->login;
		}

		public function setSenha($value) {
			$this->senha = $value;
		}

		public function getSenha() {
			return $this->senha;
		}

		public function setData($value) {
			$this->data = $value;
		}

		public function getData() {
			return $this->data;
		}

		public function setIdade($value) {
			$this->idade = $value;
		}

		public function getIdade() {
			return $this->idade;
		}

		public function loadById($id) {
			$stmt = new SQL;
			$rows = $stmt->select("SELECT * FROM tb_usuarios WHERE uid=:id ORDER BY uid", array(
				":id" => $id
			));
			foreach($rows as $row) {
				$this->setId($row['uid']);
				$this->setLogin($row['ulogin']);
				$this->setSenha($row['usenha']);
				$this->setData(new DateTime($row['udcadatro']));
				$this->setIdade($row['uidade']);
			}
		}

		public function getList():array {
			$stmt = new SQL;
			return $stmt->select("SELECT * FROM tb_usuarios");
		}

		public static function search($q) {
			$stmt = new SQL;
			return $stmt->select("SELECT * FROM tb_usuarios WHERE ulogin LIKE :login ORDER BY uid", array(
				":login" => "%".$q."%"
			));
		}

		public function delete() {
			$stmt = new SQL;
			$stmt->query("DELETE FROM tb_usuarios WHERE uid=:id", array(
				":id" => $this->getId()
			));

			if($stmt){
				$this->setId(0);
				$this->setLogin("");
				$this->setSenha("");
				$this->setData("");
				$this->setIdade("");
			}
		}

		public function insert($values) {
			$stmt = new SQL;
			$stmt->query("INSERT INTO tb_usuarios (ulogin, usenha, uidade) VALUES (:login,:senha,:idade)", $values);
			return $stmt;
		}

		public function __toString() {
			return json_encode(array(
				"uid" => $this->getId(),
				"ulogin" => $this->getLogin(),
				"usenha" => $this->getSenha(),
				"udcadatro" => $this->getData()->format("d-m-Y H:i"),
				"uidade" => $this->getIdade()
			));
		}
	}

?>