<?php 

		echo "TALLER 2 <br><br> ";

		echo "2) Ciclo For <br><br> ";

		echo "a) Imprimir los numeros del 1 al 100 <br><br>"; 


			$n = 1;

		for($i = 0; $i < 100; $i++) {
			echo $n."<br>";
				$n++;
			}

		echo "b) Imprimir las tablas de multiplicar del 1 al 20<br><br>";

		$n = 5;
		$m = 1;
		$r;

		for($b = 0; $b < 20; $b++) {
			$r = $n * $m;
			echo $n." x ".$m." = ".$r."<br>";
			$m++;
			}


		echo "<br>c) Solicionar el factor de un numero<br><br>";


		$n = 3;
		$f = 1;

		echo $n."!"." = ";

			for($c = 1; $c <= $n; $c++){
			$f *= $c;
			echo $c;
		
				if($c == $n) {
				echo " = ".$f;
				}else {
				echo " x ";
			}
		}

 
		echo "<br>d) Solicionar el numero fibonacci<br><br>";

	$nd = 1;
	$ne = 0;
	$nf = 10;

	echo "Fibonacci de ".$nf.": <br><br>";
   
	for($d = 0; $d <= $nf; $d++) {
		echo $ne." + ".$nd." = ";

		$s = $nd + $ne;
		$nd = $ne; 
		$ne = $s;

		echo $s." "."<br>";
	}
 ?>