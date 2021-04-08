<?php 

 $host="localhost";
 $nomBd="programacion_tecnicos";
 $usuario="root";
 $password="";
 $conexion=new PDO("mysql:host=$host;dbname=$nomBd",$usuario, $password);
$cliente=$_REQUEST["cliente_id"];
$direccion=$_REQUEST["direccion"];
$servicio=$_REQUEST["servicios"];
$fecha=$_REQUEST["fecha"];
$orden=$_REQUEST["OT"];

$registrar=$conexion->prepare("INSERT INTO mantenimientos (id, orden, fecha, direccion, id_cliente) 
								VALUES(NULL,'$orden', '$fecha', '$direccion', '$cliente')");
$resultado=$registrar->execute();

$consulta=$conexion->prepare("SELECT nombre_cliente FROM clientes WHERE id='$cliente'");
$resultado=$consulta->execute();
$nombre=$consulta->fetch();

 
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<h1> MANTENIMIENTO GUARDADO </h1>
	<form method="POST" action="">
		<label for="">cliente: <strong>	<?php echo $nombre["nombre_cliente"]; ?>	</strong>	</label>
		<br>	<br>	<br>

		<label for=""> Direccion Cliente: <strong><?php echo $direccion; ?> 	</strong>	</label>
		<br>	<br>	<br>

		<label for=""> Servicios contratados: <strong><?php echo $servicio;	?>		</strong> 	</label>
		<br>	<br>	<br>

		<label for=""> fecha programada: <strong><?php echo $fecha;	?>		</strong>	 </label>
		<br>	<br>	<br>

		<label for=""> numero de orden:<strong> <?php echo $orden; ?>		</strong>	 </label>
		<br>	<br>	<br>
		
		<a href="crearMantenimiento.php"> crear un nuevo mantenimiento </a>
		<br>	<br>	<br>
		<a href="crearCliente.php"> crear un nuevo cliente </a>
	</form>
	
</body>
</html>