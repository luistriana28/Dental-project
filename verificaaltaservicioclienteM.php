<?php
session_start();

if(isset($_SESSION['usuario']))
{
    echo "<p align='right'><a href='index.php'>Cerrar Sesion</a></p>";
}
else
{
    echo "<p align='right'><a href='loginmedicos.php'>Login</a></p>";
}
?>
<html>
<head>
<title></title>
</head>
<body background="img/log1.JPG">
<?php
$conexion=mysqli_connect("localhost","root")
or die("Problemas de la conexion");
mysqli_select_db($conexion,"dentaltorreon")
or die ("Problemas de la conexion de la base de datos");
$inserta="insert into servicio(id_persona,id_medico,id_TipoDeServicio) 
values('$_POST[pacientes]','$_POST[medicos]','$_POST[servicios]')";
mysqli_query($conexion,$inserta) or die("Proble mas con el query");
mysqli_close($conexion);
echo "<font color='white'>Servicio Registrado Exitosamente</font>";
?>
<br />
<br />
<a href="formservicioclienteM.php">Regresar</a>
</body>
</html>