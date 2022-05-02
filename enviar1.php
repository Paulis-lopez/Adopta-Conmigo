<?php 
include_once 'conexion.php';

$nombre = $_GET["nombre"];
$apellido = $_GET["apellido"];
$telefono = $_GET["telefono"];
$documento = $_GET["documento"];
$correo = $_GET["correo"];
$id_animal = $_GET["id_animal"];

$slq_agregar = 'INSERT INTO adopciones (NOMBRE, APELLIDO, TELEFONO, DOCUMENTO, CORREO, ID_ANIMAL) VALUES (?,?,?,?,?,?)';
	$agregar = $pdo->prepare($slq_agregar);
	$agregar->execute(array($nombre,$apellido,$telefono,$documento,$correo,$id_animal));
printf("<script type='text/javascript'>alert('Sus datos han sido guardados, pronto nos comunicaremos con usted para concretar la adopcion'); </script>"); 
printf("<script> window.location='inicio.php';</script>");
 ?>