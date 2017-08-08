<?php
session_start();

if(isset($_SESSION['usuario']))
{
    echo "<p align='right'><a href='logoutmedicos.php'>Cerrar Sesion</a></p>";
}
else
{
    echo "<p align='right'><a href='loginmedicos.php'>Login</a></p>";
}
?>
<html>
<head>
<title>Alta Tratamiento</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
</head>
<body>

<?php
$nombre_tratamiento=$_POST['nombre_tratamiento'];
$comentarios=$_POST['comentarios'];
$conexion=mysqli_connect("localhost","root","","dentaltorreon") or die ("Problemas con la conexion");
if($nombre_tratamiento==null||$cometarios==null)
{
    echo "<font color='red'>Hay campos vacios verifica porfavor</font>";
}
else
{
 
mysqli_query($conexion,"insert into tratamiento (id_TipoDeServicio,nombre_tratamiento,comentarios) 
values ('$_POST[servicio]','$_POST[nombre_tratamiento]','$_POST[comentarios]')") or die ("Problemas en la Consulta".mysqli_error());   

echo "<font color='green'>Tratamiento exitosamente registrado</font>";
}
mysqli_close($conexion);
?>
<br />
<br />
<a href="formaltatratamiento.php">Regresar</a>

</body>
</html>