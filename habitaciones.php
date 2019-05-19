<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">

	<title>Habitaciones</title>
	
<link rel="stylesheet" href="css/style.css"

</head>
<body>
<?php
session_start();
include("conexion.php");
$sql="select habitacion,precio,foto from tipohabitaciones";
$resultado=$conexion->query($sql);

while($fila=$resultado->fetch_assoc()){


	echo "
				

<div class='reservas'>
	<div class='rcabeza'>
		<div class='foto'>
			<img src='imagenes/".$fila['foto']."'>
		</div>
		<div class='tipo'>
			".$fila['habitacion']." precio= ".$fila['precio']."
		
</div>
	</div>

	";



?>
}	

</body>
</html>