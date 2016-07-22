	<?php
		include("../conexion.php");
	?>
	<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="utf-8">
		<title>HORARIOS</title>
		<link rel="shortcut icon" type="image/png" href="../img/logo.png">
		<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/estilos.css">
		<style type="text/css">
			#unos{
				background: red;
				color: #fff;
				font-size: 35px;
				font-family: cambria;
				padding: 5px;

			}
			#unossq{
				background: #aaf;
				color: #fff;
				font-size: 20px;
				font-family: cambria;
				padding: 1px;

			}
			#aca{
				background: blue;
				color: #000;
				font-size: 25px;
				font-family: cambria;
				padding: 5px;
			}
		</style>
	</head>
	<body background="../img/fondo.jpg">
		<div class="container" style="border: 1px solid black;background-color:#00ccff; font face=Afont face=Arial">
			<h1 class="titulo-blog"><b>UNIVERSIDAD TÉCNICA DE COTOPAXI</b></h1>
			<p><b>Subir horarios segun horario</b></p>
		</div>
		<div  class="container" style="border: 1px solid black;background-color:#f0f8ff;font face=Arial">
					<ul class="nav navbar-nav">
						<li ><a href="index.php"><b>Inicio</b></a></li>
					</ul>
		</div>
	</center>
	<center>

	<?php
	include_once 'config.inc.php';
	if (isset($_POST['subir'])) {
	    $nombre = $_FILES['archivo']['name'];
	    $tipo = $_FILES['archivo']['type'];
	    $tamanio = $_FILES['archivo']['size'];
	    $ruta = $_FILES['archivo']['tmp_name'];
	    $destino = "archivos/" . $nombre;
	    if ($nombre != "") {
	        if (copy($ruta, $destino)) {
	            $periodo= $_POST['periodo'];
	            $db=new Conect_MySql();
	            $sql = "INSERT INTO horarios(periodo_hora,tamanio,tipo,nombre_archivo) VALUES('$periodo','$tamanio','$tipo','$nombre')";
	            $query = $db->execute($sql);
	            if($query){
	                echo "El horario ya esta registrado en el sistema";
	            }
	        } else {
	            echo "El horario no se registro correctamente";
	        }
	    }
	}
	?>


	<form method="post" action="" enctype="multipart/form-data">
		
	<div id="aca" class="container">Periodo:
		<select name="periodo">
			<option></option>
			<option>Julio 2016</option>
			<option>Octubre 2016</option>
			<option>Nobiemre 2016</option>

		</select>
	</div>
	<br><br><br>
	<div class="col-md-offset-3 col-md-9">
	<input type="file" name="archivo" class="btn btn-primary" required/>
	<br>
	<input type="submit" value="SUBIR HORARIOS" name="subir" class="btn btn-primary" > 
	<a href="lista.php">Horarios</a>
	</div>

	</form>
	<br><br><br><br><br><br><br><br>
	<br><br><br><br><br><br><br><br>

	</center>

	</body>
	</html>