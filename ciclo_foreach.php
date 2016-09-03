<?php 
		echo "TALLER 2 <br><br> ";


		echo "3) Ciclo foreach <br><br> ";


		echo "a) Imprimir en pantalla el siguiente array('alonso','pedro','victor','manuela') <br><br> ";


		$no = array("Alonso", "Pedro", "Victor", "Manuela");

	foreach ($no as $no) {
		echo $no."<br><br>";
	}


		echo "b) Pedir al usuario que ingrese 5 numeros aleatorios y almacenarlos en un array, y mostrarlos en forma acendente <br><br> ";

			$na = array();

			$na[0] = 29;
			$na[1] = 22;
			$na[2] = 17;
			$na[3] = 30;
			$na[4] = 1;

		echo "Los numeros aleatorios ingresados fueron ordenados ascendentemente: <br><br>";

		sort($na);
	
		foreach($na as $na) {
		echo "Numeros ".$na.""."<br><br>";
		}

	
		echo "c) Pedir al usuario que ingrese 5 numeros aleatorios y almacenarlos en un array, y mostrarlos en forma decendente <br><br> ";

			$na = array();

			$na[0] = 929;
			$na[1] = 822;
			$na[2] = 117;
			$na[3] = 630;
			$na[4] = 121;

		echo "Los numeros aleatorios ingresados fueron ordenados descendentemente: <br><br>";

		rsort($na);
	
		foreach($na as $na) {
		echo "Numeros ".$na.""."<br><br>";
		}		


		echo "d) Pedir al usuario que ingrese 5 nombres y mostrarlos <br><br>";


		$n= array();

		$n[0] = "Jairo";
		$n[1] = "Andres";
		$n[2] = "Faiber";
		$n[3] = "Manuel";
		$n[4] = "Adriana";

		echo "Los nombres ingresados son: <br><br>";

		foreach ($n as $n) {
		echo $n."<br><br>";
		}
 ?>