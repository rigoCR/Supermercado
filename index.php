<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Sistema Control de Inventarios - Perimercados</title>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/styles.css">
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
	<div class="container-fluid clearfix">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2 col-lg-6 col-lg-offset-3">
			<h1>Sistema Inventario Supermercado</h1>
		</div>
	</div>
	<div class="container-fluid">
				<div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4">
					<div class="login">
					<form name="autentification_frm" method="post" action="php/control.php" enctype="application/x-www-from-urlencoded">
					<!--PHP LOGIN-->
					<?php
error_reporting(E_ALL ^ E_NOTICE); // Oculta todos los errores

if($_GET["error"] == "data"){
	echo '<div class="error-login">Usuario o Password Incorrecto<br/></div>';
}
else{}
?>
<!--TERMINA PHP LOGIN-->
				    	<label class="clearfix" for='nombre'>Usuario:</label>
				        <input class="clearfix rounded" type="text" name="username" id="username"/>
				        <a href="#">Olvidó su usuario?</a>
				        <label class="clearfix" for='nombre'>Contraseña:</label>
				        <input class="clearfix rounded" type="password" name="password" id="password"/>
				        <a href="#">Olvidó su contraseña?</a>
				        <button class="rounded" type='submit'>Ingresar</button>
        			</form>
        			</div>
				</div>
			</div>

</div>


</body>

</html>