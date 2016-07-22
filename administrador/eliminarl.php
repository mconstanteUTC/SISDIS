<?php
require('conexion1.php');
$id=$_GET['id'];
$query="select * from laboratorio where Id_lab='$id'";
$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();	
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Reserva de Laboratorios</title>
	<link rel="shortcut icon" type="image/png" >
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<style type="text/css">
	.demo {
		width:100%;
		height:100%;
		border:1px double #C0C0C0;
		border-collapse:collapse;
		border-spacing:2px;
		padding:5px;
	}
	.demo caption {
		caption-side:bottom;
		text-align:left;
	}
	.demo th {
		border:1px double #C0C0C0;
		padding:5px;
		background:#F0F0F0;
	}
	.demo td {
		border:1px double #C0C0C0;
		text-align:left;
		padding:5px;
		background:#FFFFFF;
	}
	</style>
</head>
<body background="../img/fondo.jpg">
<div class="container" style="border: 1px solid black;background-color:#00ccff; font face=Afont ">
		<div class="container">
		<h1 class="titulo-blog">UNIVERSIDAD TÉCNICA DE COTOPAXI</h1>
		<p>CENTRO DE LABORATORIOS DE SISTEMAS</p>
	</div>
	</div>
	<div  class="container" style="border: 1px solid black;background-color:#f0f8ff;font face=Arial">
				<ul class="nav navbar-nav">
					<li ><a href="index.php"><b>Inicio</b></a></li>
					<li><a href="historial.php"><b>Historial de reservas</b></a></li>
					<li><a href="listahora.php"><b>Lista de reservas</b></a></li>
				</ul>
	</div>


<body>
	<div class="container" >
	<h3>Quieres Eliminar Reserva</h3>
	<form name="Eliminar_docente" method="POST" action="eli_lab.php">
		<table center width="50%">
			<tr>
				<input type="hidden" name="id" value "<?php echo $id;?>">
				<td width="20">Id</td>
				<td width ="30"><input type="text" name="id" size="25" value="<?php echo $row['Id_lab']; ?>"/>
			</td>
			
			<tr>
				<input type="hidden" name="nombre" value "<?php echo $id;?>">
				<td width="20">Numero</td>
				<td width ="30"><input type="text" name="nombre" size="25" value="<?php echo $row['numero_lab']; ?>"/>
			</td>
			</tr>
			<tr>
			<td width="20">Fecha</td>
				<td width ="30"><input type="text" name="apellido" size="25" value="<?php echo $row['fecha_lab']; ?>"/>
			</td>
			</tr>
			<tr>
			<td width="20">hora</td>
				<td width ="30"><input type="text" name="apellido" size="25" value="<?php echo $row['hora_ingreso_lab']; ?>"/>
			</td>
			</tr>
			<tr>	
			<td width="20">Hora</td>
				<td width ="30"><input type="text" name="apellido" size="25" value="<?php echo $row['hora_salida_lab']; ?>"/>
			</td>
			</tr>
			<tr>
			<td width="20">Docente</td>
				<td width ="30"><input type="text" name="apellido" size="25" value="<?php echo $row['docente_lab']; ?>"/>
			</td>
			</tr>
			<tr>
			<td width="20">Curso</td>
				<td width ="30"><input type="text" name="apellido" size="25" value="<?php echo $row['Curso_lab']; ?>"/>
			</td>
			</tr>
			<tr>
			<td width="20">Asignatura</td>
				<td width ="30"><input type="text" name="apellido" size="25" value="<?php echo $row['asignatura_lab']; ?>"/>
			</td>
			</tr>
			<tr>
			<td colspan ="2"><center><input type ="submit" name="Eliminar" value="SI" /></center></td>
		</tr>
	</table>

</form>
</body>
</html>
