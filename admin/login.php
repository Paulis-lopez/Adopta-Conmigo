<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" href="css\login.css">
	<script src="https://kit.fontawesome.com/0504d5bd80.js"></script>
    <script type="text/javascript" src="procesos/JavaScript/validarLogin.js"></script>
</head>


<body>
	<h1>ADOPTA CONMIGO</h1><br><br><br>
<div id="formulario">
<!-- <form action="" onsubmit="" method="post"> -->

	<label id="titulo">Bienvenido</label>

	<br>

	<label for="usuario">Usuario:</label>
	<div class="inputWithIcon">
  <input type="text" placeholder="Digite su usuario" id="usuario" name="usuario" autocomplete="off">
 <i style="text-decoration: none;"></i>
</div>


	<br>

	<label for="contraseña">Contraseña:</label>
	<div class="inputWithIcon">
  <input type="password" placeholder="Digite su contraseña" id="contraseña" name="contraseña">
  <i style="text-decoration: none;"></i>
</div>
	<button type="submit" id="boton"  onclick="validarLogin()">Ingresar</button>
<!-- </form> -->
</div>





</body>
</html>
