<?php 
include_once 'conexion.php';

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$telefono = $_GET["telefono"];
$documento = $_GET["documento"];
$correo = $_GET["correo"];
$dinero = $_GET["dinero"];

$slq_agregar = 'INSERT INTO dinero (NOMBRE, APELLIDO, TELEFONO, DOCUMENTO, CORREO, DINERO) VALUES (?,?,?,?,?,?)';
	$agregar = $pdo->prepare($slq_agregar);
	$agregar->execute(array($nombre,$apellido,$telefono,$documento,$correo,$dinero));
printf("<script type='text/javascript'>alert('Su donacion ha sido concretada. Muchas gracias'); </script>"); 
printf("<script> window.location='inicio.php';</script>");
 ?>