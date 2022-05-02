<?php 


$link ='mysql:host=localhost;dbname=adoptaconmigo';
$usuario='root';
$pass= '';

try {

    $pdo = new PDO($link, $usuario, $pass);


} catch (PDOException $error) {
    print "¡Error!: " . $error->getMessage() . "<br/>";
    die();
}


 ?>