<?php 
session_start();

include('conexion.php');

$usu=$_POST["usuari"];
$password=md5($_POST["pass"]);

$sql="select id, nombres ,apellidos , email , sexo , nivel from usuario where nombre='$usu' and password='$password'";

$resultado=$conexion->query($sql);

$usuR="";
$passR="";
$nivel="";
$id="";

while($fila=$resultado->fetch_assoc())
{
        $usuR=$fila['nombres'];
        $passR=$fila['password'];
        $nivel=$fila['nivel'];
        $id=$fila['id'];
}

if ($usu!=$usuR || $password!=$passR)

{
echo "error ,registrese";
}
 else{
 	if ($usu==$usuR &&  $password==$passR && $nivel=="cliente") 
 	{
    $_SESSION['usu']=$usuR;
    $_SESSION['password']=$passR;
 	$_SESSION['nivel']=$nivel;
 	$_SESSION['id']=$id;

 	echo "cliente".$usu;
 	echo "header(index.php)";
 	}
 	if($usu==$usuR && $password==$passR && $nivel=="admi")
 	{

$_SESSION['usu']=$usuR;
$_SESSION['password']=$passR;
$_SESSION['nivel']=$nivel;
$_SESSION['id']=$id;

echo "admi".$usu;
echo "header(index.php)";

 	}
 }




?>
