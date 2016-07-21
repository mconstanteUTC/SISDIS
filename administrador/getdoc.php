<?php

require('conexion.php');

echo 'selecciona docente : <select onchange="getdocente(this.values);" name="cbx_docente" id="cbx_docente">';

$query="SELECT nombre_docentes, apellido_docente from docente ORDER BY id_docentes";
if($resultado=$mysqli->query($query))
{
while($row=$resultado->fetch_assoc())
{
?>

<option value="<?php echo $row['id_docentes']; ?>"><?php echo $row['nombre_docentes']; ?><?php echo $row['apellido_docente']; ?></option>


<?php 
}
}
echo '</select>';
?>


