<?php 
	
	class SQL extends PDO {
		private $conn;

		public function __construct() {
			try {
				$this->conn = new PDO("mysql:host=localhost;dbname=sqlphp7","root","");
				$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch(PDOException $e) {
				echo "ERROR: " . $e->getMessage();
			}
		}

		public function __clone() {}

		private function setParams($statement, $parameters = array()) {
			foreach($parameters as $key => $value){
				$this->setParam($statement, $key, $value);
			}
		}

		private function setParam($statement, $key, $value) {
			$statement->bindParam($key, $value);
		}

		public function query($rawQuery, $params = array()) {
			$stmt = $this->conn->prepare($rawQuery);
			if(count($params) > 0){
				$this->setParams($stmt, $params);
			}
			$stmt->execute();
			return $stmt;
		}

		public function select($rawQuery, $params = array()):array {
			$stmt = $this->query($rawQuery, $params);
			return $stmt->fetchAll(PDO::FETCH_ASSOC);
		}
	}

?>