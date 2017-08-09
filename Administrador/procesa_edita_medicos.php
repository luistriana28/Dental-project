<?php
$conexion=mysqli_connect("localhost","root","","dentaltorreon") or
  die("Problemas en la conexion");
mysqli_query($conexion,"update medico
                       set nombre='$_POST[nombre]',
                       apellidoP='$_POST[apellidoP]',
                       apellidoM='$_POST[apellidoM]',
                       telefono='$_POST[telefono]',
                       especialidad='$_POST[especialidad]',
                       cedula='$_POST[cedula]'
                       where id_medico=$_POST[id_medico]") 
or die("Problemas en el select:".mysql_error());

echo "<font color='white'>El Medico fue modificado con exito.</font>";
header("refresh: 2; url = edMedico.php");
?>