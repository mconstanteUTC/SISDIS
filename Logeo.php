<?php
	include("conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>INICIAR LOGEO</title>
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" type="text/css" href="engine1/style.css" />
	<script type="text/javascript" src="engine1/jquery.js"></script>
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link href="css/bootstrap.min.css" rel="stylesheet">
 <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0 , minimum-scale=1.0">
	<link href="css/main.css" rel="stylesheet">
	<link rel="shortcut icon" type="image/png" >
</head>
<body>
<div id="uno">
	<b>UNIVERSIDAD TÉCNICA DE COTOPAXI</b>
</div>
</div>
<br><br>

<div style="float:left;width: 60%">
	<center>
<form method="post" action="procesar_logeo.php">
		<div class="form-input">
			<input type="email" name="usuario" placeholder="Usuario" required/>
		</div>	
		<br>
		<div class="form-input">
			<input type="password" name="contrasena" placeholder="Contraseña" required/>
		</div>	
		<br>
		<input type="submit" name="btn1" value="INGRESAR" class="button">	
		<br>		
	</form>
	</center>
</div>
<br>

	<img src="img/reg.png" width="200px" height="200px">
	

</body>
</html>