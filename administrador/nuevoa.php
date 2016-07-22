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
	<h1>Registrar Docentes</h1>

	<form name="Docentes" method="POST" action="guardar_asignatura.php">
		<table width="50%">
			<tr>
				<td width ="20"><b>Id Asignatura</b></td>
				<td width = "30"><input type="text" name="id_asignatura" size="25"></td>
			</tr>
			<tr>
				<td width ="20"><b>Nombre asignatura</b></td>
				<td width = "30"><input type="text" name="nombre_asignatura" size="25"></td>
			</tr>
			
		
			<tr>
				<td>Ci Docente encargado</td>
				<center>
					<td>
					<select name="nombre" class="btn btn-warning">
						<?php
							$sql="SELECT *  FROM docente";
							$rec= mysql_query($sql);
							

							while($row=mysql_fetch_array($rec))
								{
									echo "<option>";
									echo $row['id_docentes'];							
									echo "</option>";
								}
						?>
					
				
	</td>
			</tr><p></p>
<tr>
				<td cotspan="2"><center><input type="submit" name="enviar" value="Registrar"/></center></td>
			</tr>
		</table>
	</form>
</body>
</html>
