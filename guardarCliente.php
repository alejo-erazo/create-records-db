<?php 

 $host="localhost";
 $nomBd="programacion_tecnicos";
 $usuario="root";
 $password="";
 $conexion=new PDO("mysql:host=$host;dbname=$nomBd",$usuario, $password);
$nombre=$_REQUEST["nombre_cliente"];
$servicio=$_REQUEST["servicio"];


$registrar=$conexion->prepare("INSERT INTO clientes (id, nombre_cliente, servicio_contratado_cliente) 
								VALUES(NULL,'$nombre', '$servicio')");
$resultado=$registrar->execute();

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1> CLIENTE GUARDADO </h1>
	<form method="POST" action="">

		<label for="">cliente: <strong>	<?php echo $nombre; ?>	</strong>	</label>
		<br>	<br>	<br>

		<label for=""> servicio: <strong><?php echo $servicio; ?> 	</strong>	</label>
		<br>	<br>	<br>

		
		
		<a href="crearMantenimiento.php"> crear un nuevo mantenimiento </a>
		<br>	<br>	<br>
		<a href="crearCliente.php"> crear un nuevo cliente </a>

	</form>
	
</body>
</html>