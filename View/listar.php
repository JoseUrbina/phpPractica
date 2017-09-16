<?php 
	require_once("../Modelos/estudiante.php");

	$estudiante = new estudiante();

	$reg = $estudiante->ListarEstudiante();

	if($reg)
	{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado</title>
</head>
<body>
	<h3>Listado de estudiantes</h3>

	<table>
		<th>id</th>
		<th>Nombres</th>
		<th>Apellidos</th>

		<?php foreach ($reg as $fila) { ?>
			<tr>
				<td><a href="editar.php?id=<?php echo $fila['idEstudiante'];?>" ><?php echo $fila["idEstudiante"]; ?></a></td>
				<td><?php echo $fila["nombre"]; ?></td>
				<td><?php echo $fila["apellido"]; ?></td>
			</tr>
		<?php } ?>
	</table>

	<?php 
		}else
		{
			echo "<script>alert('Ocurrio un error');window.location='principal.html';</script>";
		}
	?>
</body>
</html>