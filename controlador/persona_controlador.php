<?php 
	require_once 'modelo/persona_modelo.php';
	

	class Persona_controlador {
		public function index() {
			$persona = new Persona_modelo();
			$datos = $persona->obtenerPersonas();
			require_once 'vista/inicio_view.php';
		}

		public function new() {
			require_once 'vista/new_view.phtml';
		}

		public function create() {
			$persona = new Persona_modelo();
			$persona->nuevaPersona($_POST['Per_Nombre'],$_POST['Per_Apellido'],$_POST['Per_Edad'],$_POST['Per_Genero'],$_POST['Per_Correo']);
		}

		public function show($id) {		
			$persona = new Persona_modelo();
			$persona->mostrarPersona($id);
			$resultado = $persona->resultado;
			require_once 'vista/show_view.php';
		}

		public function edit($id) {
			$persona = new Persona_modelo();
			$datos = $persona->obtenerDatos($id);
			if(isset($_POST['btnActualizar'])){
				$persona->editarPersona($id,$_POST['Per_Nombre'],$_POST['Per_Apellido'],$_POST['Per_Edad'],$_POST['Per_Genero'],$_POST['Per_Correo']);
			}
			require_once "vista/edit_view.phtml";
		}

		public function delete($id) {
			$persona = new Persona_modelo();
			$persona->eliminarPersona($id);
		}
	}
?>