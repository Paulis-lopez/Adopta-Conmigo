<?php
include_once 'conexion.php';


    $sql_leer = 'SELECT * FROM dinero';
    $leer     = $pdo->prepare($sql_leer);
    $leer->execute();

    $resultado = $leer->fetchAll();
    $contador  = 0;
    foreach ($resultado as $dato1) {
        $contador = $contador + 1;
    }

$total = 0;

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
    <title>Dinero Donado</title>
  </head>
  <body>




    <div class="container-fluid mt-5" >

  <div class="row">

  
    <div id="formulario2">
      
<h2>Registro de Dinero donado</h2><br><br>

<?php if ($contador > 0): ?>
<table border="1" class="reserva">

<tr>

<th>Codigo</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Telefono</th>
<th>Documento</th>
<th>Correo</th>
<th>Dinero</th>
<th>Acciones</th>

</tr>
<?php foreach ($resultado as $dato): ?>
<tr>

<?php $total = $total + $dato["DINERO"]; ?>

    <td><?php echo $dato["ID"]; ?></td>
    <td><?php echo $dato["NOMBRE"]; ?></td>
    <td><?php echo $dato["APELLIDO"]; ?></td>
    <td><?php echo $dato["TELEFONO"]; ?></td>
    <td><?php echo $dato["DOCUMENTO"]; ?></td>
    <td><?php echo $dato["CORREO"]; ?></td>
    <td><?php echo $dato["DINERO"]; ?></td>

    <td>
      <a href="eliminar.php?id=<?php echo $dato['ID']; ?>" class="float-center" onclick="return confirm('¿Desea confirmar la operacion?')" style="text-decoration: none;" title="Eliminar" ></a>

      






</tr>

<?php endforeach?>

</table>
<?php endif?>
<?php if ($contador == 0): ?>
  <div class="reserva"><label>No se encontraron Donaciones</label></div>
<?php endif?>
<br><h4>el total de Dinero donado es: <?php echo $total; ?></h4>

<br><a href="../menu.php" id="boton" class="btn btn-primary mt-3" >Salir</a>

    </div>



<!-- ---------------------------------------------------------------- -->
  

  </div><!-- fin div row -->
  </div><!-- fin container principal -->












    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>