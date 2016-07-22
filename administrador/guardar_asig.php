<?php
require('conexion1.php');
$cid=$_POST['id_asig'];
$nombred=$_POST['nombre_asig'];



$query = "insert into asignaturas (id_asig, nombre_asig) values ('$cid','$nombred')";
mysql_query($query);
$resultado=$mysqli->query($query)
?>
<html>
<head>
	<title>Guardar</title>
	</head>
	<body  BGCOLOR="#3399FF">
		<center>
			<?php if($resultado>0){?>
			
			<h2>Materia Registrada</h2>
			<?php }else{
			?>

			<h2>Error al guardar</h2>
			<?php } ?>
		<p></p>
	<a href="docentes.php">REGRESAR</a>
	<br>
	<br>
	<div> <img src="../img/rd.png" width="200px" height="200px"></div>
</center>
</body>
</html>