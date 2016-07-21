<?php
    include("../conexion.php");
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Laboratorios</title>
   <link rel="shortcut icon" type="image/png" href="../img/logo.png">
    <link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../css/estilos.css">
<script src="js/jquery.min.js"></script>
<link href="css/estilos.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600,700,900' rel='stylesheet' type='text/css'>
<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
            <script type="text/javascript">
                $(document).ready(function () {
                    $('#horizontalTab').easyResponsiveTabs({
                        type: 'default',           
                        width: 'auto', 
                        fit: true  
                    });
                });
               </script>

    </head>
    <body background="../img/fondo.jpg">
        <div class="container" style="border: 1px solid black;background-color:#00ccff; font face=Afont face=Arial">
        <h1 class="titulo-blog"><b>UNIVERSIDAD TÉCNICA DE COTOPAXI</b></h1>
        <p><b>LABORATORIOS C.I.Y.A</b></p>
    </div>
    <div  class="container" style="border: 1px solid black;background-color:#f0f8ff;font face=Arial">
                <ul class="nav navbar-nav">
                    <li ><a href="index.php"><b>Inicio</b></a></li>
                    <li ><a href="docentes.php"><b>Docentes</b></a></li>
                    <li><a href="reservas.php"><b>Reservas</b></a></li>
                    <li><a href="horarios.php"><b>Horarios</b></a></li>
                    <li><a href="historial.php"><b>Historial de reservas</b></a></li>
                </ul>
    </div>
    
</a>
                                </li>
                </ul>
                
            </div>
        </div>
    </nav>
</header>


<div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>Periodo</th>
                <th>Horarios</th>
            </tr>
        <?php
        include 'config.inc.php';
        $db=new Conect_MySql();
            $sql = "select*from horarios";
            $query = $db->execute($sql);
            while($datos=$db->fetch_row($query)){?>
            <tr>
                <td><?php echo $datos['periodo_hora']; ?></td>
                <td><a href="archivo.php?id=<?php echo $datos['Id_hora']?>"><?php echo $datos['nombre_archivo']; ?></a></td>
            </tr>
                
          <?php  } ?>
            
        </table>
 </div>
    </body>
</html>
