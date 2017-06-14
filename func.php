<?php 
	header("Content-type: text/html; charset=utf-8");
	/* FUNÇÕES */

		// TESTE DE FUNÇÃO BASICA
			function calc1($var1,$var2){
				echo $var1 * $var2;
			}
			calc1(5,9);
			echo "<br><hr><br>";


		// TESTE DE FUNÇÃO COM VARIAVEL GLOBAL
			$var_global = 0;
			function calc2($num){
				global $var_global;
				$var_global += $num;
				echo "Seu número é ".$num." e seu total é de ".$var_global.".<br>";
			}
			calc2(20);
			calc2(50);
			echo "<br><hr><br>";


		// TESTE DE FUNÇÃO COM VARIAVEL ESTATICA
			function calc3($num){
				static $var_static = 0;
				$var_static += $num;
				echo "Seu número é ".$num." e seu total é de ".$var_static.".<br>";
			}
			calc3(10);
			calc3(10);
			calc3(30);
			echo "<br><hr><br>";


		// TESTE DE FUNÇÃO SEM PARAMETRO NA CRIAÇÃO MAIS OBTIDOS NO INTERIOR
			function no_args(){
				$quantidade = func_num_args();
				$argumentos = func_get_args();

				for($i=0;$i<$quantidade;$i++){
					echo "Argumento: ".$argumentos[$i]."<br>";
				}

				echo "<br>";
				
				foreach($argumentos as $argumento){
					echo "Argumento: ".$argumento."<br>";
				}
			}

			no_args("Pedro","Eric","Anita","Rose");
			echo "<br><hr><br>";

 ?>