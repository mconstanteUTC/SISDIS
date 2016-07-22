<?php
	include("../conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Reserva de Laboratorios</title>
	<link rel="shortcut icon" type="image/png" >
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
	<style type="text/css">
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
<body background="../img/fondo.jpg">
<div class="container" style="border: 1px solid black;background-color:#00ccff; font face=Afont ">
		<div class="container">
		<h1 class="titulo-blog">UNIVERSIDAD TÉCNICA DE COTOPAXI</h1>
		<p>CENTRO DE LABORATORIOS DE SISTEMAS</p>
	</div>
	</div>
	<div  class="container" style="border: 1px solid black;background-color:#f0f8ff;font face=Arial">
				<ul class="nav navbar-nav">
					<li ><a href="index.php"><b>Inicio</b></a></li>
					<li><a href="historial.php"><b>Historial de reservas</b></a></li>
					<li><a href="listahora.php"><b>Lista de reservas</b></a></li>
				</ul>
	</div>

</a>


<br>
<div class="container">
        <table class="demo">
            <tr>
                <th>Laboratorio</th>
                <th>Dia</th>
                <th>Fecha</th>
                <th>Hora de Ingreso</th>
                <th>Hora de Salida</th>
                <th>Docente Encargado</th>
                <th>Curso</th>
                <th>Asignatura</th>
                <th>Reservacion</th>
            </tr>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from laboratorio";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['numero_lab']; ?></td>
                <td><?php echo $datos['dia_lab']; ?></td>
                <td><?php echo $datos['fecha_lab']; ?></td>
                <td><?php echo $datos['hora_ingreso_lab']; ?></td>
                <td><?php echo $datos['hora_salida_lab']; ?></td>
                <td><?php echo $datos['docente_lab']; ?></td>
                <td><?php echo $datos['Curso_lab']; ?></td>
                <td><?php echo $datos['asignatura_lab']; ?></td>
         	 	<td><a href="eliminard.php?id=<?php echo $row['id_docentes'];?>">Eliminar</a></td>
                </tr>
                
          <?php  } ?>
            
        </table>
 </div>
</body>
</html>