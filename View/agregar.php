<?php 

	require_once("../Modelos/estudiante.php");

	if(isset($_POST['submit']))
	{
		$Nombre = $_POST['nombre'];
		$Apellido = $_POST['apellido'];
		$User = $_POST['user'];
		$Contra = $_POST['contra'];

		$estudiante = new estudiante();
		$reg = $estudiante-> RegistarEstudiante($Nombre, $Apellido, $User, $Contra);

		if($reg)
			header("location:principal.html");
		else
			echo "Ocurrio un error";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Agregar un nuevo estudiante</title>
	<style>
		div
		{
			margin: 5px;
		}
	</style>
</head>
<body>
	<h3>Agregar estudiante</h3>

	<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="POST">
		<div>
			<label for="nombre">Nombres: <input type="text" name="nombre" id="nombre"></label>
		</div>
		<div>
			<label for="apellido">Apellidos: <input type="text" name="apellido" id="apellido"></label>
		</div>
		<div>
			<label for="user">Nombre de usuario: <input type="text" name="user" id="user"></label>
		</div>
		<div>
			<label for="contra">Contraseña: <input type="text" name="contra" id="contra"></label>
		</div>
		<input type="submit" value="Agregar" name="submit">
	</form>

</body>
</html>