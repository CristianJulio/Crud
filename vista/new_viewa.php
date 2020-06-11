<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Nuevo</title>
</head>
<body>
	<h1>Nueva persona</h1>

	<form action="index.php?accion=create&id=<?php echo $_GET['id'] ?>" method="post">
		<table>
			<tr>
				<td><label for="Per_Nombre">Nombre:</label></td>
				<td><input type="text" name="Per_Nombre" id="Per_Nombre"></td>
			</tr>
			<tr>
				<td><label for="Per_Apellido">Apellido:</label></td>
				<td><input type="text" name="Per_Apellido" id="Per_Apellido"></td>
			</tr>
			<tr>
				<td><label for="Per_Edad">Edad:</label></td>
				<td><input type="text" name="Per_Edad" id="Per_Edad"></td>
			</tr>
			<tr>
				<td><label for="Per_Genero">Genero:</label></td>
				<td><input type="text" name="Per_Genero" id="Per_Genero"></td>
			</tr>
			<tr>
				<td><label for="Per_Correo">Correo:</label></td>
				<td><input type="text" name="Per_Correo" id="Per_Correo"></td>
			</tr>
			<tr>
				<td><input type="submit" name="btnSubmit" id="btnSubmit" value="Registrar"></td>
				<td><input type="reset" name="btnReset" id="btnReset"></td>
			</tr>
		</table>
	</form>
</body>
</html>