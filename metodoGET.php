<?php

	// Ver los datos de una determinada variable en este caso, $_GET
	// var_dump($_GET);
	
	if(isset($_GET["numero"]) && is_numeric($_GET["numero"]))
	{
		$numero = $_GET["numero"];

		echo "<h2>Tabla de multiplicar del $numero</h2>";

		for($i=1;$i<=12;$i++)
			echo $numero ." * " . $i . " = " .($numero*$i) ."</br>";
	}
	else
		echo "Número no válido";

	
?>