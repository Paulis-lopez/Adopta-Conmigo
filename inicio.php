<?php 

include_once 'conexion.php';

$sql_leer = 'SELECT * FROM animales';
$leer = $pdo->prepare($sql_leer);
$leer->execute();

$resultado = $leer->fetchAll();


 ?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>Animales en adopcion</title>

<!--aca llamamos a nuestro css-->

	<link rel="stylesheet" href="css/inicio.css">

<!-- Aplico las fuente de letra desde google fonts-->
<link href="https://fonts.googleapis.com/css?family=Acme&display=swap" rel="stylesheet">

<!--aca llamamos a nuestro jquery y a script-->

	<script src="js/jquery-3.2.1.js"></script>
	<script src="js/filtrar.js"></script>
	<script src="js/menu.js"></script>
	<script src="https://kit.fontawesome.com/0504d5bd80.js"></script>
</head>

<body>

	<header>


	<div class="menu_bar">
		<a href="#" class="bt_menu"><i class="fas fa-bars"></i>Menu</a>
	</div>

	<nav>
		<ul>
			<li><a href="inicio.php"><i class="fas fa-paw"></i>Adopciones</a></li>
			<li><a href="dobjetos.php"><i class="fas fa-box"></i>Donar Objetos</a></li>
			<li><a href="ddinero.php"><i class="fas fa-hand-holding-usd"></i>Donar Dinero</a></li>
			<li class="login"><a href="admin/login.php"><i class="fas fa-user"></i>Ingreso Admin</a></li>
		</ul>
	</nav>

</header>
	
	<div class="wrap">

<!--nuestro titulo-->
		<h1>Animales en adopcion</h1>

<!--cuerpo de a clase-->
		<div class="store-wrapper">
<!--lista de categorias-->
			<div class="category_list">
<!--hacemos enlaces y un clase de caegory_item y le damos el atributo category-->
				<a href="#" class="category_item" category="all"><i class="fas fa-home"></i>Todos</a>
				<a href="#" class="category_item" category="Perro"><i class="fas fa-dog"></i>Perros</a>
				<a href="#" class="category_item" category="Gato"><i class="fas fa-cat"></i>Gatos</a>
			</div>
<!--lista de productos-->
			<section class="products-list">
<!-- creamos el contenedor de productos, product-item y le damos el atributo category -->

<?php foreach($resultado as $dato): ?>

				<div class="product-item" category="<?php echo $dato['ESPECIE']; ?>" title="Click para adoptar">
					<a href="adopcion.php?id=<?php echo $dato['ID']; ?>"><img src="IMAGENES/<?php echo $dato['IMAGEN']; ?>.jpg" alt="" ><div class="info">
						<h2<br>>Nombre: <?php echo $dato['NOMBRE']; ?></h2><br>
						<h3>Raza: <?php echo $dato['RAZA']; ?></h3><br>
						<h3>Color: <?php echo $dato['COLOR']; ?></h3><br>
						<h3>Edad: <?php echo $dato['EDAD']; ?></h3>
					</div><div class="info"></div></a>
				</div>

<?php endforeach ?>
				
			
			</section>
		</div>
	</div>
<script> alert("bienvenid@ a adopta conmigo"); </script>
</body>
</html>

