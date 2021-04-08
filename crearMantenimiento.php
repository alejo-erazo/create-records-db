<?php 

 $host="localhost";
 $nomBd="programacion_tecnicos";
 $usuario="root";
 $password="";
 $conexion=new PDO("mysql:host=$host;dbname=$nomBd",$usuario, $password);
 $consulta=$conexion->prepare("SELECT id, nombre_cliente FROM clientes");
 $resultado=$consulta->execute();
 $clientes=$consulta->fetchAll();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1> CREAR MANTENIMIENTO </h1>
	<form method="POST" action="guardarMantenimiento.php">
		<label for="">cliente: </label>
		<select name="cliente_id"> 
			<option> seleccione... </option> <?php 
				for ($i=0; $i < count($clientes) ; $i++) { 	
			?>
				<option value="<?php echo $clientes[$i]["id"]?>"> <?php echo $clientes[$i]["nombre_cliente"]?></option>

			<?php
					} 
			?>
		</select>	<br>	<br>	<br>

		<label for=""> Direccion Cliente: </label>
		<input type="text" name="direccion">
		<br>	<br>	<br>

		<label for=""> Servicios contratados: </label>
		<input type="text" name="servicios">
		<br>	<br>	<br>

		<label for=""> fecha programada: </label>
		<input type="date" name="fecha">
		<br>	<br>	<br>

		<label for=""> numero de orden: </label>
		<input type="text" name="OT">
		<br>	<br>	<br>
		
		<button type="submit">enviar formulario  
		</button>
		<br>	<br>	<br>
		<a href="crearCliente.php">ir a crear un nuevo cliente </a>
	</form>
	
</body>
</html>