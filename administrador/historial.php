<?php
	include("../conexion.php");
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<title>Historial</title>
	<link rel="shortcut icon" type="image/png" >
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/estilos.css">
</head>
<body background="#66ffff">
	<div class="container" style="border: 1px solid black;background-color:#00ccff; font face=Afont ">
		<div class="container">
		<h1 class="titulo-blog">UNIVERSIDAD TÉCNICA DE COTOPAXI</h1>
		<p>CENTRO DE LABORATORIOS DE SISTEMAS</p>
	</div>
	</div>
	<div  class="container" style="border: 1px solid black;background-color:#f0f8ff;font face=Times New Roman">
				<ul class="nav navbar-nav">
					<li ><a href="index.php"><b>Inicio</b></a></li>
					<li><a href="historial.php"><b>Historial de reservas</b></a></li>
					<li><a href="listahora.php"><b>Lista de reservas</b></a></li>
				</ul>
	</div>

</a>
                                </li>
				</ul>
				
			</div>
		</div>
	</nav>
</header>



<br>
<center>
<form method="post">
	<?php 
$var1="";
$var2="";
$var3="";
$var4="";
$var5="";
$var6="";
$var7="";
$var8="";

if (isset($_POST["btn1"])) {
  $btn=$_POST["btn1"];
  $bus=$_POST["cedula"];
if ($btn=="Buscar") {  
 
 $sql="select * from laboratorio where numero_lab='$bus'";

$cs=mysql_query($sql,$conex);
while ($fila=mysql_fetch_array($cs)) {
  $var1= $fila[1];
  $var2= $fila[2];
  $var3= $fila[3];
  $var4 = $fila[4];
  $var5 = $fila[5];
  $var6 = $fila[6];
  $var7 = $fila[7];
  $var8 = $fila[8];

}
  }

}

?>
    
    <div  >
    <div>
        <div >
            <div ><b><center>HISTORIAL DE RESERVACION</center></b>   
        
         </div>
        </div>  
        <div class="panel-body" >
                
                  <br>
                  <div  style="margin-bottom: 25px">
                	 <label for="email" class="col-md-3 control-label">Laboratorio:</label>
                    <div class="col-md-9">
                        <input type="text" id="email" maxlength="10" class="form-control" data-minlength="10" onkeypress="ValidaSoloNumeros();" name="cedula" placeholder="Ingrese numero de Laboratorio" value="<?php echo $var1 ?>" value="" required/><br>
                        <p class="error" style="color: red; font-weight: bold;">
						</p>
						
                    </div>
                </div>
                <br>
                <div  style="margin-bottom: 25px">
                    <label class="col-md-3 control-label">Dia:</label>
                    <div class="col-md-9">
                        <input type="text" onkeypress="ValidaSoloLetras();" id="password" class="form-control" name="nombre" value="<?php echo $var2 ?>" readonly>
                   	<p class="error" style="color: red; font-weight: bold;">
						
						</p>
                    </div>
                </div>
                <div  style="margin-bottom: 25px">
                    <label class="col-md-3 control-label">Fecha:</label>
                    <div class="col-md-9">
                        <input type="text" onkeypress="ValidaSoloLetras();" id="password" class="form-control" name="nombre" value="<?php echo $var3 ?>" readonly>
                   	<p class="error" style="color: red; font-weight: bold;">
						
						</p>
                    </div>
                </div>


                <br>
                <div style="margin-bottom: 27px">
                    <label class="col-md-3 control-label">Ingreso:</label>
                    <div class="col-md-9">
                        <input type="text" onkeypress="ValidaSoloLetras();" id="password" class="form-control" name="nombre" value="<?php echo $var4 ?>" readonly>
                   	<p class="error" style="color: red; font-weight: bold;">
						
						</p>
                    </div>
                </div>
                <div style="margin-bottom: 25px">
                    <label class="col-md-3 control-label">Salida:</label>
                    <div class="col-md-9">
                        <input type="text" id="password" class="form-control" name="direccion" value="<?php echo $var5 ?>" readonly>
                   		<p class="error" style="color: red; font-weight: bold;">
						</p>
                    </div>
                </div>
                <div  style="margin-bottom: 25px">
                    <label class="col-md-3 control-label">Docente:</label>
                    <div class="col-md-9">
                        <input type="text" id="password" maxlength="10" class="form-control" name="telefono" data-minlength="10" onkeypress="ValidaSoloNumeros();"  value="<?php echo $var6 ?>" readonly>
                    	<p class="error" style="color: red; font-weight: bold;">
						</p>
                    </div>
                </div>
                <div style="margin-bottom: 25px">
                    <label class="col-md-3 control-label">Curso:</label>
                    <div class="col-md-9">
                        <input type="text" id="password" onkeypress="ValidaSoloLetras();" class="form-control" name="genero" value="<?php echo $var7 ?>" readonly>
                   	<p class="error" style="color: red; font-weight: bold;">
						</p>
                    </div>
                </div>
                  <div  style="margin-bottom: 25px">
                    <label class="col-md-3 control-label">Asignatura:</label>
                    <div class="col-md-9">
                        <input type="text" id="password" class="form-control" name="email" value="<?php echo $var8 ?>"readonly>
                    	<p class="error" style="color: red; font-weight: bold;">
						</p>
                    </div>
                </div>
                  		                       				
       			<div class="col-md-offset-3 col-md-9">
                        <button id="btn-signup" type="submit" class="button" name="btn1" value="BUSCAR"><b>Verificar Reservaciones</b></button>	
                
               </div>
               

         </div>
    </div>
		
		               
		               
		                
		         </div> 
</form>
</center>
</body>
</html>
