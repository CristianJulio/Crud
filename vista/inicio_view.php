<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Inicio</title>
</head>
<body>
	<h1>Lista de personas</h1>

	<table border="1">
		<thead>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Edad</th>
			<th>Genero</th>
			<th>Correo</th>
		</thead>
		<tbody>
			<?php foreach ($datos as $dato) { ?>
				<tr>
					<td><a href="index.php?accion=show&id=<?php echo $dato['Per_Id'] ?>"><?php echo $dato['Per_Nombre']; ?></a></td>
					<td><?php echo $dato['Per_Apellido']; ?></td>
					<td><?php echo $dato['Per_Edad']; ?></td>
					<td><?php echo $dato['Per_Genero']; ?></td>
					<td><?php echo $dato['Per_Correo']; ?></td>
					<td><a href="index.php?accion=edit&id=<?php echo $dato['Per_Id'] ?>">Editar</a></td>
					<td><a href="index.php?accion=delete&id=<?php echo $dato['Per_Id'] ?>">Eliminar</a></td>
				</tr>
			<?php } ?>
		</tbody>
	</table>
	<a href="index.php?accion=new">Nuevo</a>
</body>
</html>