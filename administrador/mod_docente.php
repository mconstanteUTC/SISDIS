<?php
require('conexion1.php');

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];

$query="UPDATE docente set nombre_docentes='$nombre', apellido_docente='$apellido' where id_docentes='$id'";
$resultado=$mysqli->query($query);

?>
<html>
<head>
	<title>modificar</title>
</head>
<body>
	<center>
		<?php 
			if($resultado>0){
		?>
			<h2>Modificado</h2>
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
