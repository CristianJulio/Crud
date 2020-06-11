<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mostrar</title>
</head>
<body>
	<h1>Mostrar Persona</h1>

	<?php 
		while ($dato = $resultado->fetch_assoc()) {
			$nombre = $dato['Per_Nombre'];
			$apellido = $dato['Per_Apellido'];
			$edad = $dato['Per_Edad'];
			$genero = $dato['Per_Genero'];
			$correo = $dato['Per_Correo'];
		}
	?>

	<table>
		<tr>
			<td>Nombre:</td>
			<td><?php  echo $nombre; ?></td>
		</tr>
		<tr>
			<td>Apellido:</td>
			<td><?php  echo $apellido; ?></td>
		</tr>
		<tr>
			<td>Edad:</td>
			<td><?php  echo $edad; ?></td>
		</tr>
		<tr>
			<td>Genero:</td>
			<td><?php  echo $genero; ?></td>
		</tr>
		<tr>
			<td>Correo:</td>
			<td><?php  echo $correo; ?></td>
		</tr>
	</table>
	<a href="index.php">Ver todos</a>
	<a href="index.php?accion=edit&id=<?php echo $_GET['id']; ?>">Editar</a>
</body>
</html>