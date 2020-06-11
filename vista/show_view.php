<header>
	<a href="index.php">Home</a>
	<h1>Lista de personas</h1>
</header>

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
<div class="links">
	<a class="link" href="index.php">Ver todos</a>
	<a class="link" href="index.php?accion=edit&id=<?php echo $_GET['id']; ?>">Editar</a>
</div>