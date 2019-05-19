
<?php
session_start();
include("conexion.php");
if(isset($_SESSION['usuario'])){
	echo "header()";
}

?>

<!DOCTYPE html>


<html>
<head>
	<title>pagina principal</title>
	<link rel="stylesheet" type="text/estilo.css" >
</head>
<body>
	

<center>
	<div id=contenedor>
		<div id="cabeza">
			<label id="titulo">BIENVENIDO AL HOTEL TARABUCO</label></br>
			<label>USUARIO:</label><?php echo $_SESSION['usuario']; ?></label></br>
			<label>NIVEL:<?php echo $_SESSION['nivel'];?>
			</label>
		</div>
	</center>
		<div id="izquierda">
			<a href="habitaciones.php">Habitaciones</a></br></br>
			<a href="tipo.php">Tipo habitacion</a></br></br>
			<a href="reservas.php">Reservas</a></br></br>
			<a href="salir.php">Salir</a></br></br>
		</div>
	</div>
</center>
</body>
</html>