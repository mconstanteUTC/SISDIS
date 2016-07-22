<?php
	include("../conexion.php");
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Laboratorio</title>
	<link rel="shortcut icon" type="image/png" >
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<title>Registros</title>
	<style>

	.demo {
		width:100%;
		height:100%;
		border:4px none #0000FF;
		border-collapse:separate;
		border-spacing:10px;
		padding:4px;
	}
	.demo caption {
		caption-side:top;
		text-align:center;
	}
	.demo th {
		border:4px none #0000FF;
		padding:4px;
		background:#328CEF;
	}
	.demo td {
		border:4px none #0000FF;
		text-align:left;
		padding:2px;
		background:#E8E8E8;
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
					<li><a href="reservas.php"><b>Reservas</b></a></li>
					<li><a href="horarios.php"><b>Horarios</b></a></li>
					<li><a href="historial.php"><b>Historial de reservas</b></a></li>
				</ul>
	</div>
<div class="container" style="border: 1px solid black;background-color:#cccccc">
<h1>Registros</h1>
<br>
<a href="nuevod.php" ><b>Registrar Docentes</b></a><br/>
</div>
<br>
<div class="container">
<table border=1 width"80%" class="demo"  >
<thead>
	<tr>
		<td><b>Id docente</b></td>
		<td><b>Nombre Docentes</b></td>
		<td><b>Apellido Docentes</b></td>
		<td><b>Modificar</b></td>
		<td><b>Eliminar</b></td>
	</tr>
	<tbody>
	<?php
		$sql="SELECT *  FROM docente";
		$rec=mysql_query($sql);
		while($row=mysql_fetch_array($rec))

	{ ?>
		<tr>
			<td>
			<?php echo $row['id_docentes']?>
		</td>
		<td>
			<?php echo $row['nombre_docentes']?>
		</td>
		<td>
			<?php echo $row['apellido_docente']?>
		</td>
		
		<td>
			<a href="modificard.php?id=<?php echo $row['id_docentes'];?>">Modificar</a>
		</td>
		<td>
			<a href="eliminard.php?id=<?php echo $row['id_docentes'];?>">Eliminar</a>
		</td>
		
		</tr>
		<?php } ?>
	</tbody>
</table>
</div>
</body>		
	
</html>