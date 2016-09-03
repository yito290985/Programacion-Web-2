<?php


	echo "TALLER 2 <br><br> ";

	echo "1) Ciclo While <br><br> ";

	echo "a) Imprimir en pantalla  los numeros del 1 al 10 <br><br>";

	$i = 1;
	
	while ($i <= 10) {
    	echo $i++. "<br>";  
	}


	echo "<br> b) Sumar los numeros del 1 al 100 <br>";

	$n = 1;
	$s = 0;

	while ($n <= 100) {
      $s = $s + $n;
      $n = $n + 1; 
	}

	echo "La suma es: $s <br>";


	echo "<br> c) Sumar los numeros pares del 1 al 50 <br>";

	$n = 1;
	$p = 2;
	$r;

	while ( $n < 50) {
 		if ($n % 2 == 0){
 			$r = $n + $p;
      		echo $n." + ".$p. " = ".$r."<br>";
      		$n++;
 		}else {

 		}
 		echo "El numero ".$n." no es un numero par.<br>";
			$n++;  				
	}


	echo "<br> d) Sumar los numeros impares del 1 al 50 <br>";

	$n = 1;
	$i = 2;
	$r;

	while ( $n < 50) {
 		if ($n % 2 == 0){
 			echo "El numero ".$n." es un numero par.<br>";
			$n++;
 		}else {
 			$r = $n + $i;
      		echo $n." + ".$i. " = ".$r."<br>";
      			$n++;
 		}
 		  				
	}



?>