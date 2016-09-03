<?php 
		echo "TALLER 2 <br><br> ";

		echo "5) Funciones <br><br> ";

		echo "a) Declara un array de numeros decimales de tipo doubles de nombre importe e introduce cuatro elementos que sean"." 32.583 , 11.232 , 45.781 , 22.237. a continuacion muestra por pantalla todos los elementos. <br><br>";

		$importe = array(32.583, 11.239, 45.781, 22.237);

		foreach($importe as $numeros) {
		echo $numeros."<br><br>";
		}



		echo "b) Pedir al usuario que ingrese dos valores, y deacuerdo a los valores ingresados, mostrar en panalla un arreglo num1 * num2 que contenga ceros y unos. <br><br>";


		$v1 = 29;
		$v2 = 17;

		$na = array($v1, $v2);

		$x = 0;

		while ($x <= 1) {
		echo decbin($na[$x])."<br><br>";
		$x++;
		}


		echo "c) Crear un arreglo de dimencion 4x4 y pedir al usuario que ingrese 4 numeros. En la primer columna mostrar los numeros ingresados por el usuario, en la segunda columna el numero elvado al cuadrado, en la terrcer columna el numero elado al cubo y en la cuarta columna elevado a la cuarta. Imprimir en pantalla el resultado del arreglo. <br><br>";


		$n1 = 2;
		$n2 = 5;
		$n3 = 8;
		$n4 = 10;

		$cuadrado1 = $n1 ** 2;
		$cuadrado2 = $n2 ** 2;
		$cuadrado3 = $n3 ** 2;
		$cuadrado4 = $n4 ** 2;

		$cubo1 = $n1 ** 3;
		$cubo2 = $n2 ** 3;
		$cubo3 = $n3 ** 3;
		$cubo4 = $n4 ** 3;

		$cuarta1 = $n1 ** 4;
		$cuarta2 = $n2 ** 4;
		$cuarta3 = $n3 ** 4;
		$cuarta4 = $n4 ** 4;

		$Arreglo[0][0][0][0] = $n1;
		$Arreglo[1][0][0][0] = $n2;
		$Arreglo[2][0][0][0] = $n3;
		$Arreglo[3][0][0][0] = $n4;

		$Arreglo[0][0][0][0] = $cuadrado1;
		$Arreglo[0][1][0][0] = $cuadrado2;
		$Arreglo[0][2][0][0] = $cuadrado3;
		$Arreglo[0][3][0][0] = $cuadrado4;

		$Arreglo[0][0][0][0] = $cubo1;
		$Arreglo[0][0][1][0] = $cubo2;
		$Arreglo[0][0][2][0] = $cubo3;
		$Arreglo[0][0][3][0] = $cubo4;

		$Arreglo[0][0][0][0] = $cuarta1;
		$Arreglo[0][0][0][1] = $cuarta2;
		$Arreglo[0][0][0][2] = $cuarta3;
		$Arreglo[0][0][0][3] = $cuarta4;

		for($w = 0; $w <= 3; $w++) {
		//echo $miArreglo[$w][$x][$y][$w]."<br><br>";
		for($x = 0; $x <= 3; $x++) {
		//echo $miArreglo[$w][$x][$y][$z]."<br><br>";
		for($y = 0; $y <= 3; $y++) {
		//echo $miArreglo[$w][$x][$y][$z]."<br><br>";
		for($z = 0; $z <= 3; $z++) {
		echo $Arreglo[$w][$x][$y][$z]."<br><br>";
		echo $Arreglo[$w][$x][$y][$z]."<br><br>";
		echo $Arreglo[$w][$x][$y][$z]."<br><br>";
		echo $Arreglo[$w][$x][$y][$z]."<br><br>";
		}
		}
		}
		}

 ?>