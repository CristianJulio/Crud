<header>
	<a href="index.php">Home</a>
	<h1>Lista de personas</h1>
</header>

<table border="1">
	<thead>
		<th>Nombre</th>
		<th>Apellido</th>
		<th>Edad</th>
		<th>Genero</th>
		<th>Correo</th>
		<th>Editar</th>
		<th>Eliminar</th>
	</thead>
	<tbody>
		<?php foreach ($datos as $dato) { ?>
			<tr>
				<td><a href="index.php?accion=show&id=<?php echo $dato['Per_Id'] ?>"><?php echo $dato['Per_Nombre']; ?></a></td>
				<td><?php echo $dato['Per_Apellido']; ?></td>
				<td><?php echo $dato['Per_Edad']; ?></td>
				<td><?php echo $dato['Per_Genero']; ?></td>
				<td><?php echo $dato['Per_Correo']; ?></td>
				<td><a href="index.php?accion=edit&id=<?php echo $dato['Per_Id'] ?>">editar</a></td>
				<td><a href="index.php?accion=delete&id=<?php echo $dato['Per_Id'] ?>">Eliminar</a></td>
			</tr>
		<?php } ?>
	</tbody>
</table>
<div class="links">
	<a href="index.php?accion=new">Nuevo</a>
</div>