<?php
session_start();
if(isset($_SESSION['user']))
{
echo "<p align='right'><a href='index.php'>Cerrar Sesion</a></p>";
$cedula=$_POST['cedula'];
        $especialidad=$_POST['especialidad'];
        $nombre=$_POST['nombre'];
        $apellidoP=$_POST['apellidoP'];
        $apellidoM=$_POST['apellidoM'];
        $telefono=$_POST['telefono'];
        $dental=mysqli_connect("localhost","root") or die ("Problemas con la conexion");
        mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la base de datos");
        if ($cedula==null||$especialidad==null||$nombre==null||$apellidoP==null||$apellidoM==null||$telefono==null)
        {
        echo "<font color='red'>Hay campos vacios verifica porfavor</font>";
        }
        else
        {
        mysqli_query($dental,"insert into medico(cedula,especialidad,nombre,apellidoP,apellidoM,telefono)
        values('$_POST[cedula]','$_POST[especialidad]','$_POST[nombre]','$_POST[apellidoP]','$_POST[apellidoM]','$_POST[telefono]')")
        or die ("Problemas en la consulta".mysqli_error());
        echo "<font color='green'>Medico Registrado Exitosamente</font>";
        header("refresh:1;url=regMedico.php"); 
        }
        mysqli_close($dental);
}
else
{
echo "<p align='right'><a href='loginmedicos.php'>Login</a></p>";
}
?>