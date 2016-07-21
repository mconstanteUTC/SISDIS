<?php
require('conexion1.php');
$id=$_GET['id'];
$query="select * from docente where id_docentes='$id'";

$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();
?>
<html>
<head>
	<title>modificar</title>
	<meta charset="utf-8">
	<title>Historial</title>
	<link rel="shortcut icon" type="image/png" >
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<style type="text/css">
	.demo {
		width:100px;
		height:100px;
		border:1px solid #E3F8FD;
		border-collapse:separate;
		border-spacing:10px;
		padding:30px;
	}
	.demo caption {
		caption-side:top;
		text-align:center;
	}
	.demo th {
		border:1px solid #E3F8FD;
		padding:20px;
		background:#5789FD;
	}
	.demo td {
		border:1px solid #E3F8FD;
		text-align:left;
		padding:5px;
		background:#FFFFFF;
	}
	</style>
</head>
<body>
	<div class="container" style="border: 1px solid black;background-color:#00ccff; font face=Afont face=Arial">
		<h1 class="titulo-blog"><b>UNIVERSIDAD TÉCNICA DE COTOPAXI</b></h1>
		<p><b>LABORATORIOS C.I.Y.A</b></p>
	</div>
	<div  class="container" style="border: 1px solid black;background-color:#f0f8ff;font face=Arial">
				<ul class="nav navbar-nav">
					<li ><a href="index.php"><b>Inicio</b></a></li>
					<li class="active"><a href="#"><b>Docentes</b></a></li>
					<li><a href="Rhorarios.php"><b>Reservas</b></a></li>
					<li><a href="horarios.php"><b>Horarios</b></a></li>
					<li><a href="historial.php"><b>Historial de reservas</b></a></li>
				</ul>
	</div>
	<div class="container" style="float:left;width: 90%">
	<h3>Modificar</h3>
	
	<form name="modificar_docente" method="POST" action="mod_docente.php">
		
		<table width="50%" class="demo">
			<tr>
				<input type="hidden" name="id" value "<?php echo $id;?>">
				<td width="20">Nombre</td>
				<td width ="30"><input type="text" name="nombre" size="25" value="<?php echo $row['nombre_docentes']; ?>"/>
			</td>
			</tr>
			<tr>
			<td width="20">Apellido</td>
				<td width ="30"><input type="text" name="apellido" size="25" value="<?php echo $row['apellido_docente']; ?>"/>
			</td>	
			<td colspan ="2"><center><input type ="submit" name="Guardar" value="Guardar" class="button"/></center></td>
		</tr>
	</table>

</form>
</div>
<center>
<div style="float:ringht;width: 60%">
		<img src="../img/m.png" width="200px" height="200px">
	</div></center>
</body>
</html>
