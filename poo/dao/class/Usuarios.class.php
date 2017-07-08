<?php 

	class Usuarios {
		private $uid;
		private $ulogin;
		private $usenha;
		private $ucaccount;

		public function setId($value){
			$this->uid = $value;
		}

		public function getId() {
			return $this->uid;
		}

		public function setLogin($value) {
			$this->ulogin = $value;
		}

		public function getLogin() {
			return $this->ulogin;
		}

		public function setSenha($value){
			$this->usenha = $value;
		}

		public function getSenha() {
			return $this->usenha;
		}

		public function setAccount($value) {
			$this->ucaccount = $value;
		}

		public function getAccount() {
			return $this->ucaccount;
		}

		public function loadById($id) {
			$sql = new SQL;
			$rows = $sql->select("SELECT * FROM tb_usuarios WHERE uid=:id", array(
				":id" => $id
			));

			if($rows){
				foreach($rows as $row) {
					$this->setId($row['uid']);
					$this->setLogin($row['ulogin']);
					$this->setSenha($row['usenha']);
					$this->setAccount($row['ucaccount']);
				}
			}
		}

		public static function getList() {
			$sql = new SQL;
			return $sql->select("SELECT * FROM tb_usuarios ORDER BY uid");
		}

		public static function search($q) {
			$sql = new SQL;
			$sql->select("SELECT * FROM tb_usuarios WHERE ulogin LIKE :q ORDER BY uid", array(
				":q" => "%".$q."%"
			));
		}

		public static function delete($id) {
			$sql = new SQL;
			$sql->query("DELETE FROM tb_usuarios WHERE uid = :id", array(
				":id" => $id
			));
		}

		public static function insert($parameters = array()){
			$sql = new SQL;
			$sql->query("INSERT INTO tb_usuarios (ulogin, usenha) VALUES (:ulogin, :usenha)", $parameters);
		}

		public static function update($parameters = array()) {
			$sql = new SQL;
			$sql->query("UPDATE tb_usuarios SET ulogin = :login, usenha = :senha WHERE uid = :id", $parameters);
		}

		public function __toString() {
			return json_encode(array(
				"uid" => $this->getId(),
				"ulogin" => $this->getLogin(),
				"usenha" => $this->getSenha(),
				"ucaccount" => $this->getAccount()
			));
		}
	}

?>