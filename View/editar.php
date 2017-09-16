<?php 
	require_once("../Modelos/estudiante.php");

	if(isset($_GET["id"]) && !empty($_GET["id"]))
	{
		$estudiante = new estudiante();

		$reg = $estudiante->obtenerEstudiante($_GET["id"]);
	}	
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Editar estudiante</title>
	<style>
		div
		{
			margin: 5px;
		}
	</style>
</head>
<body>
	<h3>Editar estudiante</h3>

	<form action="#" method="POST">
		<div>
			<label for="nombre">Nombres: <input type="text" name="nombre" id="nombre" value="<?php echo $reg['nombre']?>"></label>
		</div>
		<div>
			<label for="apellido">Apellidos: <input type="text" name="apellido" id="apellido" value="<?php echo $reg['apellido']?>"></label>
		</div>
		<div>
			<label for="user">Nombre de usuario: <input type="text" name="user" id="user" value="<?php echo $reg['user']?>"></label>
		</div>
		<div>
			<label for="contra">Contraseña: <input type="text" name="contra" id="contra" value="<?php echo $reg['contra']?>"></label>
		</div>
		<input type="submit" value="Editar" name="submit">
	</form>
</body>
</html>