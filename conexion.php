<?php
$bd_host="localhost";
$bd_nombre="Hotel";
$bd_contra="";
$bd_usu="root";
$conexion= new mysqli($bd_host,$bd_usu,$bd_contra,$bd_nombre);
if($conexion->connect_error) die ("conexion fallida".$conexion->connect_error);



?>