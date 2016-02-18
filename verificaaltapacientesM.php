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
<title>Alta Paciente</title>
</head>
<body background="img/log1.JPG">
<?php
$nombre=$_POST['nombre'];
$apellidoP=$_POST['apellidoP'];
$apellidoM=$_POST['apellidoM'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$edad=$_POST['edad'];
$dental=mysqli_connect("localhost","root") or die ("Problemas con la conexion");
mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la base de datos");
if ($nombre==null||$apellidoP==null||$apellidoM==null||$direccion==null||$telefono==null||$edad==null)
    {
        echo "<font color='red'>Hay campos vacios verifica porfavor</font>";
    }
    else
    {
     mysqli_query($dental,"insert into persona(nombre,apellidoP,apellidoM,direccion,telefono,edad) 
     values('$_POST[nombre]','$_POST[apellidoP]','$_POST[apellidoM]','$_POST[direccion]','$_POST[telefono]','$_POST[edad]')") 
     or die ("Problemas en la consulta".mysqli_error()); 
     echo "<font color='green'>Paciente Registrado Exitosamente</font>";  
    }

mysqli_close($dental);

?>
<br />
<br />
<a href="formaltapacientesM.php">Regresar</a>
</body>
</html>