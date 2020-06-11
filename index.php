<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Crud</title>
	<link rel="stylesheet" href="vista/css/style.css">
</head>
<body>
	<?php 
		require_once 'db/conexion.php';
		require_once 'controlador/persona_controlador.php';

		$controlador = new Persona_controlador();

		if(isset($_GET['accion'])) {
			switch ($_GET['accion']) {
				case 'new':
					$controlador->new();
					break;
				case 'create':
					$controlador->create();
					break;
				case 'show':
					$controlador->show($_GET['id']);
					break;
				case 'edit':
					$controlador->edit($_GET['id']);
					break;
				case 'delete':
					$controlador->delete($_GET['id']);
					break;
			}
		} else {
			$controlador->index();
		}
	?>
</body>
</html>