<?php

	$meses = ["Enero", "Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];

	// Función count : muestra la cantidad de elementos del arreglo
	$cantidad = count($meses);

	//for($i=0;$i<$cantidad;$i++)
	//	echo $meses[$i] . "</br>";

	foreach ($meses as $mes) {
		echo $mes . "</br>";
	}
?>