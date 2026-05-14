<!DOCTYPE html>
<html lang="es">	
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="../CSS/login.css">
    <title>Inicio de Sesión</title>
</head>
	<body>
		<div class="login">
			<img src="../Image/ITITools logo 2.png" alt="ITITools Logo" class="logo">
    		<h2>Inicio de Sesión</h2>

    		<form action="login.php" method="post">

        	<label for="email">Email:</label>
        	<input type="email" id="email" name="email" required>

     		<label for="password">Contraseña:</label>
      		<input type="password" id="password" name="password" required>

        	<button type="submit">Iniciar Sesión</button>
            <link rel="stylesheet" href="registro.php">
            <a href="registro.php">¿No tienes una cuenta? Regístrate aquí</a>

    		</form>
		</div>
	</body>
</html>