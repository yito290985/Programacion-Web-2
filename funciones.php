<?php 

		echo "TALLER 2 <br><br> ";

		echo "4) Funciones <br><br> ";

		echo "a) Crear una funcion llamada potencia, que pida un numero al usuario, y la potencia y arroje el resultado. <br><br>";

		$n = 8;
		$p = 4;

		function potencia($n, $p) {
		$r = $n ** $p;
		return $r;
		}

		echo "El resultado de elevar ".$n." a la ".$p." es: ".potencia($n, $p)."<br><br>";


		echo "b) Crear una funcion llamada raiz_cuadrada, que pida un numero al usuario, y la raiz cuadrada de un numero. <br><br>";

		$n = 5;

		function raizCuadrada($n) {
		$r = sqrt($n);
		return $r;
		}

		echo "La raiz cuadrada de ".$n." es: ".raizCuadrada($n)."<br><br>";


		echo "c) Crear una funcion calculadora que permita realizar las operaciones de suma, restas, multiplicacion y division de numeros. Recibe las variables desde un pantalla. <br><br>";

		$num1 = $_POST["numero1"];
		$n1 = (int)$num1;

		$num2 = $_POST["numero2"];
		$n2 = (int)$num2;


		function calculadora($n1, $n2) {
			echo $n1." + ".$n2." = ".$ts = $n1 + $n2."<br>";
			echo $n1." - ".$n2." = ".$tr = $n1 - $n2."<br>";
			echo $n1." * ".$n2." = ".$tm = $n1 * $n2."<br>";
			echo $n1." / ".$n2." = ".$td = $n1 / $n2."<br>";
		}

		echo "Las operaciones son: <br><br>";
		echo calculadora($n1, $n2);


		echo "d) Crear una funcion calculadora_fraccionarios que permita realizar las operaciones de suma, restas, multiplicacion y division de numeros fraccionarios. Recibe las variables desde un pantalla. <br><br>";


			$num1 = $_POST["numero1"];
			$n1 = (int)$num1;

			$num2 = $_POST["numero2"];
			$n2 = (int)$num2;

			$num3 = $_POST["numero3"];
			$n3 = (int)$num3;

			$num4 = $_POST["numero4"];
			$n4 = (int)$num4;

			function calculadora_fraccionaria($n1, $n2, $n3, $n4) {
				sumaFraccionaria($n1, $n2, $n3, $n4);
				restaFraccionaria($n1, $n2, $n3, $n4);
				multiFraccionaria($n1, $n2, $n3, $n4);
				divisionFraccionaria($n1, $n2, $n3, $n4);
			}

			function sumaFraccionaria($n1, $n2, $n3, $n4) {
				if($n2 == $n4) {
					echo $r = $n1 + $n3." / ".$n2."<br>";
				}else {
					$ns = $n1 * $n4 + $n3 * $n2;
				$ds = $n2 * $n4;

				$r = $ns." / ".$ds;
					echo "La suma de fracciones sin simplificar es: ".$r."<br>";
				}
			}

			function restaFraccionaria($n1, $n2, $n3, $n4) {
				if($n2 == $n4) {
					echo $r = $n1 - $n3." / ".$n2."<br>";
				}else {
					$nr = $n1 * $n4 - $n3 * $n2;
					$dr = $n2 * $n4;

					$r = $nr." / ".$dr;
					echo "La resta de fracciones sin simplificar es: ".$r."<br>";
				}
			}

			function multiFraccionaria($n1, $n2, $n3, $n4) {
				$nm = $n1 * $n3;
				$dm = $n2 * $n4;

				$r = $nm." / ".$dm;
				echo "La multiplicacion de fracciones sin simplificar es: ".$r."<br>";
			}

			function divisionFraccionaria($n1, $n2, $n3, $n4) {
				$nd = $n1 * $n3;
				$dd = $n2 * $n4;

				$r = $nd." / ".$dd;
				echo "La division de fracciones sin simplificar es: ".$r."<br>";
			}

			echo "Las operaciones fraccionarias son: <br><br>";
			echo calculadora_fraccionaria($n1, $n2, $n3, $n4);


		
 ?>
