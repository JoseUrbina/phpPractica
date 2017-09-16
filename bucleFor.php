<?php

	/*
		Bucle for y comprobar si el número es par o impar.
	*/
	for($i=1;$i<=30;$i++)
	{
		$cuadrado = ($i * $i );
		$cadena = 'Número impar';

		if($cuadrado % 2 == 0)
			$cadena = 'Número par';

		echo "El cuadrado de " . $i . " es: " . $cuadrado . " .$cadena. </br>";
	}
?>