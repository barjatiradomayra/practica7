<?php
session_start();
include("conexion.php");
if(isset($_SESSION['entrar'])){
header('index.php');
	
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>registro</title>
</head>
<body>
	<h1>FORMULARIO DE REGISTRO</h1>
	<hr />
	<form>
	Nombres:<input type="text" name="nombres" id="nombres"></br></br>
	Apellidos:<input type="text" name="apellidos" id="apellidos"></br></br>
	Email:<input type="text" name="email" id="email"></br></br>
	sexo: <input type="radio" id="sexo" name="sexo" value="masculino" checked>masculino
	<input type="radio" id="sexo" name="sexo" value="femenino">femenino
	</br></br>
	<input type="submit" value="registrar">

    </form>

</body>
</html>
