<?php
session_start();

if(isset($_SESSION['usuario']))
{
    echo "<p align='right'>Usuario: ".$_SESSION['usuario']."</br><a href='logoutmedicos.php'>Cerrar Sesion</a></p>";
}
else
{
    echo "<p align='right'><a href='login.php'>Login</a></p>";
}
?>
<html>
<head>
<title>ALTA Tipo de Servicio</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
</head>

<body>
<?php
$nombre_servicio=$_POST['nombre'];
$conexion=mysqli_connect("localhost","root")or die("Problemas de conexion");
mysqli_select_db($conexion,"dentaltorreon") or die("Problemas de conexion on la base de datos");
if ($nombre_servicio==null)
    {
        echo "<font color='red'>Hay campos vacios verifica porfavor</font>";
    }
    else
    {
       
        $query="insert into tipodeservicio (nombre_servicio) values('$_POST[nombre]')";
        mysqli_query($conexion,$query) or die("Problemas con el Query");
        echo "<font color='green'>Tipo De Servicio Registrado</font>";
        }
        mysqli_close($conexion);
?>
<br />
<br />
<a href="formaltatiposervicioM.php"><font size="3" color="#1600FF">Regresar</font></a>
</body>
</html>