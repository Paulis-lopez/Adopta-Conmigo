
<!DOCTYPE HTML>
<html>
<head>
<title>Formulario de Donacion</title>
<link href="css/adopcion.css" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="validar3.js"></script>
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
		</ul>
	</nav>

</header>

<!-- fondo del cuadro -->
<div class="singup">
		<h3>Formulario de Donacion</h3>
	<div class="signup-main">
	 

		<input type="text" placeholder="Nombre" class="phone" id="nombre" />

		<input type="text" placeholder="Apellido"  class="phone" id="apellido" />

		<input type="text" placeholder="Documento" class="phone" id="documento" />

		<input type="text" placeholder="Telefono" class="phone" id="telefono" />

		<input type="text" placeholder="Correo Electronico" class="phone" id="correo" />

		<hr><br>

		<select name="select" class="phone">
  		<option value="Banco de Bogota">Banco de Bogota</option>
 		<option value="Banco Popular">Banco Popular</option>
  		<option value="Banco CorpBanca">Banco CorpBanca</option>
  		<option value="Bancolombia">Bancolombia</option>
  		<option value="Citibank">Citibank</option>
  		<option value="BBVA Colombia">BBVA Colombia</option>
  		<option value="Banco de Occidente">Banco de Occidente</option>
  		<option value="Banco Caja Social">Banco Caja Social</option>
  		<option value="Davivienda">Davivienda</option>
  		<option value="Banagrario">Banagrario</option>
  		<option value="AV Villas">AV Villas</option>
  		<option value="Grupo De Inversiones Suramericana S.A.">Grupo De Inversiones Suramericana S.A.</option>
  		<option value="Bancoomeva">Bancoomeva</option>
		</select>

		

		<input type="number" placeholder="Cantidad de Dinero" class="phone" id="dinero" />


	  <div class="send-button">
	    <button type="submit"  class="btn" onclick="validar()">Enviar</button>
	  </div>
	  
	</div>
</div>	
</div>
</body>
</html>