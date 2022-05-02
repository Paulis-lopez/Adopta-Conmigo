<?php
include_once 'conexion.php';

if (isset($_GET['nombre']) && !empty($_GET['nombre']) && isset($_GET['raza']) && !empty($_GET['raza']) && isset($_GET['color']) && !empty($_GET['color']) && isset($_GET['edad']) && !empty($_GET['edad']) && isset($_GET['imagen']) && !empty($_GET['imagen']) ){

    $nombre    = $_GET['nombre'];
    $raza      = $_GET['raza'];
    $color     = $_GET['color'];
    $sexo      = $_GET['sexo'];
    $edad      = $_GET['edad'];
    $especie   = $_GET['especie'];
    $imagen    = $_GET['imagen'];
    $id        = $_GET['id'];

    $sql_editar = 'UPDATE animales set NOMBRE=?, RAZA=?, COLOR=?, SEXO=?, EDAD=?, ESPECIE=?, IMAGEN=? WHERE ID=? ';
    $editar     = $pdo->prepare($sql_editar);
    $editar->execute(array($nombre, $raza, $color, $sexo, $edad, $especie, $imagen, $id));

    header('location:5.php');
} else {
    echo " <script>alert('Debe llenar todos los campos')</script> ";
    header('location:5.php');
}
