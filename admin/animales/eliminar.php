<?php
include_once 'conexion.php';
$id           = $_GET['id'];
$sql_eliminar = 'DELETE FROM animales WHERE ID=?';
$eliminar     = $pdo->prepare($sql_eliminar);
$eliminar->execute(array($id));

header('location:5.php');
