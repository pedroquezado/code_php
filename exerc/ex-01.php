<?php 
	header("Content-type: text/html; charset=utf-8");

	// ESTRUTURA DE DECISÃO

	$numb = 100;

	if($numb == "100") {
		echo "Tenho o mesmo valor de numb <br>";
	}

	if($numb === "100") {
		echo 'Sou exatamente igual ao valor de numb <br>';
	}

	///////

	switch($numb) {
		case '0':
			echo "Sem desconto";
			break;

		case '50':
		 	echo "50 de desconto";
		 	break;

		case '100':
		 	echo "100% de desconto... Esta de graça!";
		 	break;

		default:
			echo "Não trabalhamos com esse desconto";
	}


	/*****************/ echo "<br><hr><br>"; /*****************/


	// ESTRUTURA DE REPETIÇÃO 

	$date_for = 1995;
	$html = "<select>";
	for($i=2017;$i>=$date_for;$i--){
		$html .= '<option value="'.$i.'">'.$i.'</option>';
	}
	$html .= "</select>";
	echo $html;

	echo "<br><br>";
	/////// 

	$array_foreach = array("Pedro","Eric","Anita");
	foreach($array_foreach as $key => $value){
		echo "Chave: ". $key .", Valor: ". $value ."<br>";
	}

	echo "<br>";
	///////

	$condicao = TRUE;
	while($condicao){
		$rand = rand(0,10);

		if($rand === 3) {
			echo "($rand)_Terminou!!!";

			$condicao = FALSE;
		} else {
			echo $rand . " ";
		}
	}

	echo "<br><br>";
	/////// 

	$num = 0;
	do {
		echo "Número: ".$num."<br>";
		$num++;
	} while($num <= 10);


	/*****************/ echo "<br><hr><br>"; /*****************/


	// ARRAY

	$myArray = array(
			"Nome"=>"Lucas",
			"Sorbenome"=>"Pedro",
			"Idade"=>21
		);

	echo "Meu nome é ".$myArray['Nome']." ".$myArray['Sorbenome'].", e eu tenho ".$myArray['Idade']." anos.<br>";

	array_push($myArray, "Branco");

	echo end($myArray) . "<br>";

	$new_array = array(1,2,3,4,5);
	for($i=0;$i<count($new_array);$i++) {
		echo $new_array[$i]."<br>";
	}


	/*****************/ echo "<br><hr><br>"; /*****************/


	// SESSÃO

	session_start();

	echo session_id() . "<br>";

	if(isset($_GET['session']) && $_GET['session'] == "create"){
		$_SESSION['id'] = 1;

	} else if(isset($_GET['session']) && $_GET['session'] == "destroy") {
		unset($_SESSION['id']);
		echo "Deslogado com sucesso.. <br>";
	}

	if($_SESSION['id']) {
		echo 'Você esta logado! Deseja sair? <a href="?session=destroy">sim</a><br>';
	} else {
		echo 'Você ainda não está logado. Deseja logar? <a href="?session=create">sim</a><br>';
	}


	/*****************/ echo "<br><hr><br>"; /*****************/


	// FUNÇÕES

	function somar($var1,$var2) {
		$calcula = $var1 + $var2;
		return "A soma entre os valores ".$var1." e ".$var2.": ".$calcula.".<br>";
	}
	echo somar(3,39);
	echo somar(39,39);
	echo somar(53,39);

	echo "<br>";

	$varGlobal = 0;
	function funcGlobal($num) {
		global $varGlobal;
		$varGlobal += $num;
		return "Voce percorreu $num com total $varGlobal.<br>";
	}
	echo funcGlobal(10);
	echo funcGlobal(20);
	echo funcGlobal(30);

	echo "<br>";

	function funcStatic($num) {
		static $varStatic;
		$varStatic += $num;
		return "Voce ganhou $num com total $varStatic.<br>";
	}
	echo funcStatic(100);
	echo funcStatic(200);
	echo funcStatic(300);

	echo "<br>";

	function getParametros() {
		$quantidade = func_num_args();
		$parametros = func_get_args();

		$gp = "Parametros: ";
		for($i=0; $i<$quantidade; $i++){
			$gp .= $parametros[$i]." ";
		}
		$gp .= "<br>";
		return $gp;
	}
	echo getParametros("Pedro","Eric","Anita");
	echo getParametros(3,2,1);


	/*****************/ echo "<br><hr><br>"; /*****************/


	// DATE

	date_default_timezone_set('America/Recife');

	echo date('d/m/Y H:i:s')." ".time()." ".strtotime("+1 week")."<br>";

	echo "<br>";

	setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'portuguese');
	echo strftime('%A, %B') . "<br>";

	echo "<br>";

	$dt = new DateTime;
	echo $dt->format('d/m/Y H:i:s')."<br>";
	$dt->add(new DateInterval('P10D'));
	echo $dt->format('d/m/Y H:i:s')."<br>";


	/*****************/ echo "<br><hr><br>"; /*****************/


	// POO

	class MyClass {
		public $prop1;
		static public $prop2;
		const prop3 = "Sou uma constante de classe.";

		public function __construct() {
			echo "A classe \"". __CLASS__ ."\" foi iniciada!<br>";
		}

		public function __destruct() {
			echo "A classe \"". __CLASS__ ."\" foi destruida.<br>";
		}

		public function setProp($newValue) {
			$this->prop1 = $newValue;
		}

		private function getProp() {
			return $this->prop1 ."<br>";
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
			echo "__destruct de finalziação na classe herdada \"". __CLASS__ ."\".<br>";
		}

		public function getProtected() {
			return $this->getPrivate();
		}
	}


	$obj = new MyOtherClass;
	$obj->setProp("Sou uma propiedade de classe.");
	echo $obj->getProtected();

	echo "<br>";

	echo MyOtherClass::prop3 . "<br>";

	echo "<br>";

	if(is_a($obj,'MyClass')) {
		echo "Sou uma Classe.<br>";
	}

	if(property_exists($obj,'prop2')) {
		echo "Tenho uma propiedade.<br>";
	}

	if(method_exists($obj,'setProp')) {
		echo "Tenho um metodo.<br>";
	}

	echo "<br>";

	MyOtherClass::$prop2 = 0;
	do {
		MyOtherClass::viewCount();
	} while(MyOtherClass::$prop2 < 10);

	echo "<br>";
?>
