<?php
	require_once("conexion.php");

	/**
	* 
	*/
	class Estudiante extends conexion
	{
		protected $nombre;
		protected $apellido;
		protected $user;
		protected $contra;

		public function __construct()
		{
			parent::__construct();
		}

		public function RegistarEstudiante($nombre, $apellido, $user, $contra)
		{
			$sql = "INSERT INTO estudiantes(nombre, apellido, user, contra) VALUES(' $nombre ',' $apellido ',' $user ',' $contra ')";

			$resultado = $this->_db->query($sql);

			if(!$resultado)
			{
				echo "Error al registrar los datos";
			}
			else
			{
				return $resultado;
				$resultado->close();
				$this->_db->close();
			}
		}

		public function ListarEstudiante()
		{
			$sql = "SELECT * FROM estudiantes";

			$resultado = $this->_db->query($sql);			

			if(!$resultado)
			{
				echo "Error al listar los datos";
			}
			else
			{
				// Convierte a un arreglo asociativo
				$estudiantes = $resultado->fetch_all(MYSQLI_ASSOC);

				return $estudiantes;
				$estudiantes->close();
				$this->_db->close();
			}
		}

		public function obtenerEstudiante($id)
		{
			$sql = "SELECT * FROM estudiantes WHERE idEstudiante = '$id'";

			$resultado = $this->_db->query($sql);			

			if(!$resultado)
			{
				echo "Error al obtener los datos";
			}
			else
			{
				return $resultado->fetch_array(MYSQLI_ASSOC);
				$resultado->close();
				$this->_db->close();
			}
		}
	}