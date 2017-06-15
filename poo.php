<?php
	header("Content-type: text/html; charset=utf-8");

	class MyClass {
		public $prop1;
		public static $prop2;
		const prop3 = 1;

		public function __construct(){
			echo "A classe \"". __CLASS__ ."\" foi iniciada!<br>";
		}

		public function __destruct() {
			echo "A classe \"". __CLASS__ ."\" foi destruida.<br>";
		}

		public function setProp($newValue) {
			$this->prop1 = $newValue;
		}

		private function getProp() {
			return $this->prop1 . "<br>";
		}

		protected function getPrivate() {
			return $this->getProp();
		}

		static public function viewCount() {
			echo "Count de número: ". ++self::$prop2 .".<br>";
		}
	}

	class MyOtherClass extends MyClass {
		public function __construct() {
			parent::__construct();
			echo "__construct iniciado na classe herdada \"". __CLASS__ ."\".<br>";
		}

		public function __destruct() {
			parent::__destruct();
			echo "__destruct finalizado na classe herdada \"". __CLASS__ ."\".<br>";
		}

		public function getProtected() {
			return $this->getPrivate();
		}
	}

	$obj = new MyOtherClass;
	$obj->setProp("Sou uma propiedade de classe");
	echo $obj->getProtected();

	echo "<br><br>";

	if(is_a($obj, 'MyClass')){
		echo "Sou uma classe.<br>";
	} else {
		echo "Não sou uma classe.<br>";
	}

	if(property_exists($obj, "prop1")){
		echo "Tenho uma propiedade.<br>";
	} else {
		echo "Não tenho uma propiedade.<br>";
	}

	if(method_exists($obj, "setProp")) {
		echo "Minha classe seta propiedades.<br>";
	} else {
		echo "Minha classe não seta propiedades.<br>";
	}

	echo "<br><br>";

	MyOtherClass::$prop2 = 0;
	do {
		MyOtherClass::viewCount();
	} while(MyOtherClass::$prop2 <= 10);

	echo "<br><br>";

	echo MyClass::prop3;

	echo "<br><br>";

	unset($obj);

	echo "<br><br>";

	echo "Fim do arquivo.";

	exit;