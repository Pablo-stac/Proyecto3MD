<!DOCTYPE html>
<html lang="es">	
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
    <title>Registro</title>
</head>
	<body>
		<div class="registro">
			<img src="ITITools logo 2.png" alt="ITITools Logo" class="logo">
    		<h2>Registro de Usuario</h2>

    		<form action="registro.php" method="post">

        	<label for="nombre">Nombre:</label>
        	<input type="text" id="nombre" name="nombre" required>

        	<label for="apellido">Apellido:</label>
        	<input type="text" id="apellido" name="apellido" required>

        	<label for="email">Email:</label>
        	<input type="email" id="email" name="email" required>

     		<label for="password">Contraseña:</label>
      		<input type="password" id="password" name="password" required>

     		<label for="rol">Elige una opción:</label>
     		<select name="opciones" id="rol">
            	<option value="Solicitante">Solicitante</option>
            	<option value="Soporte">Soporte</option>
            	<option value="Administrador">Administrador</option>
        	</select>

			<link rel="stylesheet" href="login.php">
			<a href="login.php">¿Ya tienes una cuenta? Inicia sesión aquí</a>
        	<button type="submit">Registrar</button>

    		</form>
		</div>
	</body>
</html>