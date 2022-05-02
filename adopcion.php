<?php 
$id = $_GET["id"];

 ?>


<!DOCTYPE HTML>
<html>
<head>
<title>Formulario de adopcion</title>
<link href="css/adopcion.css" rel="stylesheet" type="text/css" media="all"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<script type="text/javascript" src="validar1.js"></script>
</head>


<body>

<!-- fondo del cuadro -->
<div class="singup">
		<h3>Formulario de adopcion</h3>
	<div class="signup-main">
	 

		<input type="text" placeholder="Nombre" id="nombre" />

		<input type="text" placeholder="Apellido" class="lessgap"  id="apellido" />

		<input type="text" placeholder="Telefono" class="email" id="telefono" />

		<input type="text" placeholder="Documento" class="phone" id="documento" />

		<input type="text" placeholder="Correo Electronico" class="phone" id="correo" />

		<input type="hidden" class="phone" id="id_animal" value="<?php echo $id ?>" />


	  <div class="send-button">
	    <button type="submit"  class="btn" onclick="validar()">Enviar</button>
	  </div>
	  
	</div>
</div>	
</div>
</body>
</html>