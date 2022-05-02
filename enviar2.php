<?php 
include_once 'conexion.php';

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$telefono = $_GET["telefono"];
$documento = $_GET["documento"];
$correo = $_GET["correo"];
$objetos = $_GET["objetos"];

$slq_agregar = 'INSERT INTO objetos (NOMBRE, APELLIDO, TELEFONO, DOCUMENTO, CORREO, OBJETOS) VALUES (?,?,?,?,?,?)';
	$agregar = $pdo->prepare($slq_agregar);
	$agregar->execute(array($nombre,$apellido,$telefono,$documento,$correo,$objetos));
printf("<script type='text/javascript'>alert('Sus datos han sido guardados, pronto nos comunicaremos con usted para concretar la donacion'); </script>"); 
printf("<script> window.location='inicio.php';</script>");
 ?>