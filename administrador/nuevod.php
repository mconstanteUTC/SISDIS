<html>
<head>
	<meta charset="utf-8">
	<title>Laboratorio</title>
	<link rel="shortcut icon" type="image/png" >
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<title>Registrar docente</title>
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
		<p><b>Registrar docente Ingenieria en Sistemas</b></p>
	</div>
	<div  class="container" style="border: 1px solid black;background-color:#99ccff;font face=Arial">
				<ul class="nav navbar-nav">
					<li ><a href="index.php"><b>Inicio</b></a></li>
					<li ><a href="docentes.php"><b>Docentes</b></a></li>
					
				</ul>
	</div>
	<div class="container" style="float:left;width: 40%">
	<h1>Registrar Docentes</h1>

	<form name="Docentes" method="POST" action="guardar_docente.php">
		<center><table width="50%" class="demo">
			<tr>
				<td width ="20"><b>Nombre Docente</b></td>
				<td width = "30"><input type="text" name="nombre_docente" size="25"></td>
			</tr>
			<tr>
				<td width ="20"><b>Apellido Docente</b></td>
				<td width = "30"><input type="text" name="apellido_docente" size="25"></td>
			</tr>
		<br>
			<tr>
				<td cotspan="2"><center><input type="submit" name="enviar" value="Registrar"/></center></td>
			</tr>
		</table></center>
	</form>
	
	</div>
	<br>
	<br>
	<center><div style="float:ringht;width: 60%">
		<img src="../img/rd.png" width="200px" height="200px">
	</div></center>
</body>
</html>
