<?php
require('conexion1.php');

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

$query="delete from docente where id_docentes='$id'";
$resultado=$mysqli->query($query);

?>
<html>
<head>
	<title>Eliminar registro</title>
</head>
<body>
	<center>
		<?php 
			if($resultado>0){
		?>
			<h2>Eliminado</h2>
		<?php
		} else{
		?>	
			<h2>Error</h2>
		<?php } ?>
		<p></p>
		<A HREF ="docentes.php">regresar</a>
	</center>
</body>
</html>
