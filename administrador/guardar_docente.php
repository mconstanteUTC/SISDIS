<?php
require('conexion1.php');
$cid=$_POST['id_docente'];
$nombred=$_POST['nombre_docente'];
$apellidod=$_POST['apellido_docente'];


$query = "insert into docente (id_docentes, nombre_docentes,apellido_docente) values ('$cid','$nombred', '$apellidod')";
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
			
			<h2>Docente Registrado</h2>
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