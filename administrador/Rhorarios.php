<?php
	include("../conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Reservar Laboratorio</title>
	<link rel="shortcut icon" type="image/png" >
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<style>
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
<body background="">
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
	
<li class="active"><a href="perfil.php">

</a>
                                </li>
				</ul>
				
			</div>
		</div>
	</nav>
</header>

<form method="post">
<?php
if (isset($_POST["btn1"])) {
  $btn=$_POST["btn1"];
  if ($btn == "Reservar") {
   
    $lab=$_POST["lab"];
    $dia=$_POST["dia"];
    $fecha=$_POST["fecha"];
    $fen=$_POST["fen"];
    $fsa=$_POST["fsa"];
    $nombre=$_POST["nombre"];
    $cur=$_POST["cur"];
    $asig=$_POST["asig"];

$sql="insert into laboratorio(numero_lab,dia_lab,fecha_lab,hora_ingreso_lab,hora_salida_lab,docente_lab,Curso_lab,asignatura_lab) values
 ('$lab','$dia','$fecha','$fen','$fsa','$nombre','$cur','$asig')";

if ($lab==0) {
	echo "<script> alert('Error al reservar'); </script>";
	
}else{
	$cn= mysql_query($sql,$conex);
	echo "<script> alert('Se reservo correctamente'); </script>";
}


  }
}

?>
	<center>
		<table class="demo">
			<tr>
				<td colspan="20"><center><h2>RESERVA DE LABORATORIOS</h2></center></td>
			</tr>
			<tr>
				<td ><B>Seleccione el laboratorio</b>
				<td>
					<select name="lab" style="width:200px;height:25px;font-size:12px;font-family:Comic Sans MS;" required>
						<option></option>
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
					</select>
					</td>
				</td>
			</tr>
			<tr>
				<td><B>Seleccione el Dia</B><td>
					<select name="dia" style="width:200px;height:25px;font-size:12px;font-family:Comic Sans MS;" required >
						<option></option>
						<option>Lunes</option>
						<option>Martes</option>
						<option>Miercoles</option>
						<option>Jueves</option>
						<option>Viernes</option>
					</select>
				</td>
				</td>
			</tr>
			<tr>
				<td><b>Seleccione la Fecha</b>
				<td>
					<input type="date" name="fecha" >
					</td>
				</td>
			</tr>
			<tr>
				<td><b>Seleccione la Hora de Entrada</b>
				<td>
					<select name="fen" style="width:200px;height:25px;font-size:12px;font-family:Comic Sans MS;" required>
						<option></option>
						<option>07:00</option>
						<option>08:00</option>
						<option>09:00</option>
						<option>10:00</option>
						<option>11:00</option>
						<option>12:00</option>
						<option>13:00</option>
					</select></td>
					
				</td>
			</tr>
			<tr>
				<td><b>Seleccione la Hora de Salida</b>
				<td>
					<select name="fsa" style="width:200px;height:25px;font-size:12px;font-family:Comic Sans MS;" required>
						<option></option>
						<option>07:00</option>
						<option>08:00</option>
						<option>09:00</option>
						<option>10:00</option>
						<option>11:00</option>
						<option>12:00</option>
						<option>13:00</option>
					</select>
				</td>	
				</td>
			</tr>
			<tr>
				<td><b>Nombre del Docente encargado</b>
				<td>
					<select name="nombre" style="width:200px;height:25px;font-size:12px;font-family:Comic Sans MS;" required>

						<?php
							$sql="SELECT *  FROM docente";
							$rec= mysql_query($sql);
							while($row=mysql_fetch_array($rec))
								{
									echo "<option>";
									echo $row['nombre_docentes'];
									echo $row ['apellido_docente'];
									echo "</option>";
								}
						?>
					</select>
					</td>
					
				</td>
			</tr>
			<tr>
				<td><b>Seleccione el Curso</b>
				<td>
					<select name="cur" style="width:200px;height:25px;font-size:12px;font-family:Comic Sans MS;" required>
						<option></option>
						<option>Primero</option>
						<option>Segundo</option>
						<option>Tercero</option>
						<option>Cuarto</option>
						<option>Quinto</option>
						<option>Sexto</option>
						<option>Septimo</option>
						<option>Octavo</option>
						<option>Noveno</option>
					</select>
					</td>
				</td>
			</tr>
			<tr>
				<td><b>Asignatura </b>
					<td>
					<select   name="asig" style="width:200px;height:25px;font-size:12px;font-family:Comic Sans MS;" required>
						<?php
							$sql="SELECT *  FROM asignaturas ";
							$rec= mysql_query($sql);
							while($row=mysql_fetch_array($rec))
								{
									echo "<option>";
									echo $row['nombre_asig'];
									
									echo "</option>";
								}
						?>
					</select>
				</td>
				</td>
			</tr>
			<tr>
				<td><b>Reservar</b>
				<center>
					<td>
					<input type="submit" name="btn1" value="Reservar" class="btn btn-primary">
				</td>
				</center>
				

			</tr>
		</table>
	</center>
</form>
</body>
</html>