<?php 
	header("Content-type: text/html; charset=utf-8");


	for($i=0;$i<100;$i+=5) {
		if($i > 40 && $i < 60){
			continue;
		}

		echo "Número: ".$i."<br>";
	}

	echo "<br><hr><br>";

	$friends = array("Pedro","Eric","Anita","Rose");
	foreach($friends as $indice => $friend){
		echo "Indice: ". $indice ." com Valor: ". $friend .". <br>";
	}

	echo "<br><hr><br>";

	$condicao = true;
	while($condicao){
		$rand = rand(0,10);

		if($rand === 3) {
			echo "Terminou!! <br>";

			$condicao = false;
		} else {
			echo $rand . " ";
		}
	}

	echo "<br><hr><br>";

	$num = 0;
	do {
		echo "Pessoa: ".$friends[$num]."<br>";

		$num++;
	} while($num <= count($friends)-1);

 ?>