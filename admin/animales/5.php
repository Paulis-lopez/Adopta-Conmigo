<?php
include_once 'conexion.php';

if ($_GET && $_GET['accion'] == 2) {

    $especie = $_GET["especie"];

    if (trim($especie) == trim("Seleccione una Especie")) {

        

        $sql_leer = 'SELECT * FROM animales';
        $leer     = $pdo->prepare($sql_leer);
        $leer->execute();

        $resultado = $leer->fetchAll();

        $contador = 0;
        foreach ($resultado as $dato1) {
            $contador = $contador + 1;
        }

    } else {

       

            $sql_leer = 'SELECT * FROM animales WHERE ESPECIE=?';
            $leer     = $pdo->prepare($sql_leer);
            $leer->execute(array($especie));

            $resultado = $leer->fetchAll();

            $contador = 0;
            foreach ($resultado as $dato1) {
                $contador = $contador + 1;
            }

        }

} else {
    $sql_leer = 'SELECT * FROM animales';
    $leer     = $pdo->prepare($sql_leer);
    $leer->execute();

    $resultado = $leer->fetchAll();
    $contador  = 0;
    foreach ($resultado as $dato1) {
        $contador = $contador + 1;
    }

}

//agregar -------------------------------------------------------------------------
if ($_POST) {
    if (isset($_POST['nombre']) && !empty($_POST['nombre']) && isset($_POST['raza']) && !empty($_POST['raza']) && isset($_POST['color']) && !empty($_POST['color']) && isset($_POST['edad']) && !empty($_POST['edad']) && isset($_POST['imagen']) && !empty($_POST['imagen']) ) {
        $nombre    = $_POST['nombre'];
        $raza      = $_POST['raza'];
        $color     = $_POST['color'];
        $sexo      = $_POST['sexo'];
        $edad      = $_POST['edad'];
        $especie   = $_POST['especie'];
        $imagen    = $_POST['imagen'];

        $slq_agregar = 'INSERT INTO animales (NOMBRE, RAZA, COLOR, SEXO, EDAD, ESPECIE, IMAGEN) VALUES (?,?,?,?,?,?,?)';
        $agregar     = $pdo->prepare($slq_agregar);
        $agregar->execute(array($nombre, $raza, $color, $sexo, $edad, $especie, $imagen));
        header('location:5.php');
    } else {
        echo " <script>alert('Debe llenar todos los campos')</script> ";
    }
}
// modificar -------------------------------------------------------------
if ($_GET && $_GET['accion'] == 1) {

    $id = $_GET['id'];

    $sql_unico  = 'SELECT * FROM animales WHERE ID=?';
    $leer_unico = $pdo->prepare($sql_unico);
    $leer_unico->execute(array($id));

    $resultado_unico = $leer_unico->fetch();
}

?>

 <!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
      a{
        font-family:'Font Awesome 5 Free';
        font-weight: 700;
        text-decoration: ;
      }


    </style>
<link rel="stylesheet" href="../css/5.css">
<script type="text/javascript" src="../procesos/JavaScript/filtrar.js"></script>
    <title>Administrar Animales</title>
  </head>


  <body>




    <div class="container-fluid mt-5" >

  <div class="row">

  <div class="col-md-7">
    <div id="formulario3">
      <label for="especie">Filtrar por Especie: </label>
      <select name="especie" id="especie">

<option value="Seleccione una Especie">Seleccione una Especie</option>
<option value="Gato">Gato</option>
<option value="Perro">Perro</option>
  </select>


<button id="boton" class="btn btn-primary mt-3" onclick="filtrar()">Filtrar</button>
<a href="../menu.php" id="boton" class="btn btn-primary mt-3" >Salir</a><br><br><br>

<?php if ($contador > 0): ?>
<table border="1" class="reserva">

<tr>

<th>Codigo</th>
<th>Nombre</th>
<th>Raza</th>
<th>Color</th>
<th>Sexo</th>
<th>Edad</th>
<th>Especie</th>
<th>Acciones</th>

</tr>
<?php foreach ($resultado as $dato): ?>
<tr>

  <?php


?>


    <td><?php echo $dato["ID"]; ?></td>
    <td><?php echo $dato["NOMBRE"]; ?></td>
    <td><?php echo $dato["RAZA"]; ?></td>
    <td><?php echo $dato["COLOR"]; ?></td>
    <td><?php echo $dato["SEXO"]; ?></td>
    <td><?php echo $dato["EDAD"]; ?></td>
    <td><?php echo $dato["ESPECIE"]; ?></td>

    <td>
      <a href="eliminar.php?id=<?php echo $dato['ID']; ?>" class="float-left ml-3" onclick="return confirm('¿Desea confirmar la operacion?')" style="text-decoration: none;" title="Eliminar" ></a>

      <a href="5.php?id=<?php echo $dato['ID']; ?>&accion=1" class="float-center" style="text-decoration: none;" title="Editar/Ver Detalles"></a>






</tr>

<?php endforeach?>

</table>
<?php endif?>
<?php if ($contador == 0): ?>
  <div class="reserva"><label>No se encontraron Animales</label></div>
<?php endif?>
    </div>


  </div>
<!-- ---------------------------------------------------------------- -->
  <div class="col-md-5">
    <?php if (!$_GET || ($_GET && $_GET['accion'] != 1)): ?>

<form method="post" id="formulario">
  <h2 >Agregar Animal</h2>


  <label for="nombre">Nombre:</label>
  <input type="text" class="form-control" name="nombre" autocomplete="off" placeholder="Digite el nombre" required="required">

  <label for="raza">Raza:</label>
  <input type="text" class="form-control" name="raza" autocomplete="off" placeholder="Digite la raza" required="required">

  <label for="color">Color:</label>
  <input type="text" class="form-control" name="color" autocomplete="off" placeholder="Digite el color  " required="required">

   <label for="sexo">Sexo:</label>
  <select name="sexo" id="cbx_sexo">
<option value="Macho">Macho</option>
<option value="Hembra">Hembra</option>
  </select>

  <label for="edad">Edad:</label>
  <input type="text" class="form-control" name="edad" autocomplete="off" placeholder="Digite la edad" required="required">

  <label for="especie">Especie:</label>
  <select name="especie" id="cbx_especie">
<option value="Gato">Gato</option>
<option value="Perro">Perro</option>
  </select>

<label for="imagen">Nombre de la imagen:</label>
  <input type="text" class="form-control" name="imagen" autocomplete="off" placeholder="Digite el nombre de la imagen" required="required">

  <button id="boton" class="btn btn-primary mt-3">Agregar</button>

</form>
<?php endif?>

<!-- modificar ---------------------------------------------------------- -->
<?php if ($_GET && $_GET['accion'] == 1): ?>
<form method="get" action="editar.php" id="formulario">
<h2 >Modificar Animal</h2>


<label for="nombre">Nombre:</label>
  <input type="text" value="<?php echo $resultado_unico['NOMBRE'] ?>" class="form-control" name="nombre" autocomplete="off" placeholder="Digite el nombre" required="required">

  <label for="raza">Raza:</label>
  <input type="text" value="<?php echo $resultado_unico['RAZA'] ?>" class="form-control" name="raza" autocomplete="off" placeholder="Digite la raza" required="required">

  <label for="color">Color:</label>
  <input type="text" value="<?php echo $resultado_unico['COLOR'] ?>" class="form-control" name="color" autocomplete="off" placeholder="Digite el color  " required="required">


   <label for="sexo">Sexo:</label>
  <select name="sexo" id="sexo">
<?php if (trim($resultado_unico["SEXO"]) == trim("Macho")): ?>

<option value="Macho" selected="selected">Macho</option>
<option value="Hembra">Hembra</option>
<?php endif?>

<?php if (trim($resultado_unico["SEXO"]) == trim("Hembra")): ?>

<option value="Macho">Macho</option>
<option value="Hembra" selected="selected">Hembra</option>

<?php endif?>
  </select>


  <label for="edad">Edad:</label>
  <input type="text" value="<?php echo $resultado_unico['EDAD'] ?>" class="form-control" name="edad" autocomplete="off" placeholder="Digite la edad" required="required">

  <label for="especie">Especie:</label>
  <select name="especie" id="especie">
<?php if (trim($resultado_unico["ESPECIE"]) == trim("Gato")): ?>

<option value="Gato" selected="selected">Gato</option>
<option value="Perro">Perro</option>
<?php endif?>

<?php if (trim($resultado_unico["ESPECIE"]) == trim("Perro")): ?>

<option value="Gato">Gato</option>
<option value="Perro" selected="selected">Perro</option>

<?php endif?>
  </select>

<label for="imagen">Nombre de la imagen:</label>
  <input type="text" value="<?php echo $resultado_unico['IMAGEN'] ?>" class="form-control" name="imagen" autocomplete="off" placeholder="Digite el nombre de la imagen" required="required">


  <input type="hidden" name="id" value=" <?php echo $resultado_unico['ID'] ?> ">

  <button id="boton" class="btn btn-primary mt-3">Modificar</button>
</form>
<?php endif?>
  </div>

  </div><!-- fin div row -->
  </div><!-- fin container principal -->












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>