<?php 
	class Persona_modelo {
		public $conexion;
		public $persona;
		public $resultado;

		public function __Construct() {
			$this->conexion = Conexion::conectar();
			$this->persona = [];
		}

		public function obtenerPersonas() {
			$sql = ("select * from persona");
			$consulta = $this->conexion->Query($sql);

			while($dato = $consulta->fetch_assoc()) {
				$this->persona[] = $dato;
			}

			return $this->persona;
		}

		public function nuevaPersona($nombre,$apellido,$edad,$genero,$correo) {
			$sql = ("insert into persona(Per_Nombre,Per_Apellido,Per_Edad,Per_Genero,Per_Correo) values('$nombre','$apellido',$edad,'$genero','$correo')");
			$consulta = $this->conexion->Query($sql);

			$id = mysqli_insert_id($this->conexion);

			if ($consulta) {
				header("location: index.php?accion=show&id=$id");
			} else {
				echo "No se pudo registrar los datos";
			}
		}

		public function mostrarPersona($id) {
			$sql = ("select * from persona where Per_Id = $id");
			$resultado = $this->conexion->Query($sql);
			$this->resultado = $resultado;
		}

		public function editarPersona($id,$nombre,$apellido,$edad,$genero,$correo) {
			$sql = ("update persona set Per_Nombre='$nombre',Per_Apellido='$apellido',Per_Edad=$edad,Per_Genero='$genero',Per_Correo='$correo' where Per_Id=$id");
			$consulta = $this->conexion->Query($sql);

			if($consulta) {
				header("location: index.php?accion=show&id=$id");
			} else {
				echo "No se pudo registrar los datos" . mysqli_error($this->conexion);
			}
		}

		public function eliminarPersona($id) {
			$sql = ("delete from persona where Per_Id = $id");
			$resultado = $this->conexion->Query($sql);

			if($resultado) {
				header('location: index.php');
			} else {
				echo "No se pudo eliminar la persona";
			}
		}
	}
?>