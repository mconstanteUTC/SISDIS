<?php
require('conexion1.php');
$id=$_GET['id'];
$query="select * from docente where id_docentes='$id'";

$resultado=$mysqli->query($query);
$row=$resultado->fetch_assoc();
?>
<html>
<head>
	<title>Eliminar</title>
</head>
<body>
	<h3>Eliminar</h3>
	<form name="Eliminar_docente" method="POST" action="eli_docente.php">
		<table width="50%">
			<tr>
				<input type="hidden" name="id" value "<?php echo $id;?>">
				<td width="20">Id</td>
				<td width ="30"><input type="text" name="id" size="25" value="<?php echo $row['id_docentes']; ?>"/>
			</td>
			
			<tr>
				<input type="hidden" name="nombre" value "<?php echo $id;?>">
				<td width="20">Nombre</td>
				<td width ="30"><input type="text" name="nombre" size="25" value="<?php echo $row['nombre_docentes']; ?>"/>
			</td>
			</tr>
			<tr>
			<td width="20">Apellido</td>
				<td width ="30"><input type="text" name="apellido" size="25" value="<?php echo $row['apellido_docente']; ?>"/>
			</td>	
			<td colspan ="2"><center><input type ="submit" name="Eliminar" value="Eliminar" /></center></td>
		</tr>
	</table>
</form>
</body>
</html>
