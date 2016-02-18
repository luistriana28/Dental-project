<html>
<head>
<title>EDICION PERSONAS</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","dentaltorreon") or
  die("Problemas en la conexion");
mysqli_query($conexion,"update persona
                       set nombre='$_POST[nombre]',
                       apellidoP='$_POST[apellidoP]',
                       apellidoM='$_POST[apellidoM]',
                       direccion='$_POST[direccion]',
                       telefono='$_POST[telefono]',
                       edad='$_POST[edad]'
                       where id_persona=$_POST[id_persona]") 
or die("Problemas en el select:".mysql_error());

echo "<font color='white'>El Paciente fue modificado con exito.</font>";
header("refresh: 2; url = administra_personas.php");
?>
<style>
body{
    background: url('img/log1.JPG');
}
</style>
</body>
</html>