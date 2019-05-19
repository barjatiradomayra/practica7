<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
<title>Reservas</title>
</head>
<body>

<table border="1">
<tr>
	<td>ID</td>
	<td>IdUsuario</td>
	<td>fecha</td>
	<td>tipo Habitacion</td>
	<td>dias</td>
</tr>
	

	<?php
session_start();
include("conexion.php");
$sql="select id,idusuario,fecha,tipohabitacion,dias from reservas";
$resultado=$conexion->query($sql);

while($fila=$resultado->fetch_assoc()){

	echo "<tr>";
	echo "<td>".$fila['id']."</td>";
	echo "<td>".$fila['idusuario']."</td>";
	echo "<td>".$fila['fecha']."</td>";
	echo "<td>".$fila['tipohabitacion']."</td>";
	echo "<td>".$fila['dias']."</td>";
	echo "</tr>";

}


?>	
</table>
</body>
</html>