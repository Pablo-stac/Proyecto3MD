<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>
<body>
<div class="Registro">
	<h2>Registro de Usuario</h2>

<form action="registro.php" method="post">
	<label for="nombre">Nombre:</label>
	<input type="text" id="nombre" name="nombre" required><br><br>

	<label for="apellido">Apellido:</label>
	<input type="text" id="apellido" name="apellido" required><br><br>

	<label for="email">Email:</label>
	<input type="email" id="email" name="email" required><br><br>

	<label for="password">Contraseña:</label>
	<input type="password" id="password" name="password" required><br><br>

	<label for="opciones">Elige una opción:</label>
		<select name="opciones" id="Rol">
  			<option value="Solicitante">Solicitante</option>
 			<option value="Soporte">Soporte</option>
  			<option value="Administrador">Administrador</option>
		</select>

	<input type="submit" value="Registrar">
</form>

</div>

</body>
</html>