
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1> CREAR CLIENTE </h1>
	<form method="POST" action="guardarCliente.php">
		<label for=""> nombre cliente: </label>
		<input type="text" name="nombre_cliente">
		<br>	<br>	<br>

		<label for=""> Servicio: </label>
		<input type="text" name="servicio">
		<br>	<br>	<br>

			
		<button type="submit">Guardar CLiente  
		</button>
		<br>	<br>	<br>

		<a href="crearMantenimiento.php"> crear un nuevo mantenimiento </a>
	</form>
	
</body>
</html>