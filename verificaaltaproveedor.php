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
        <title>Alta Proveedor</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body background="img/log1.JPG">
        <?php
        $representante=$_POST['representante'];
        $direccion=$_POST['direccion'];
        $telefono=$_POST['telefono'];
        $fecha=$_POST['fecha'];
        $mercancia=$_POST['mercancia'];
        $dental=mysqli_connect("localhost","root") or die ("Problemas con la conexion");
        mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la base de datos");
        if ($representante==null||$direccion==null||$telefono==null||$fecha==null||$mercancia==null)
        {
        echo "<font color='red'>Hay campos vacios verifica porfavor</font>";
        }
        else
        {
        mysqli_query($dental,"insert into provedor(representante,direccion,telefono,fecha,marca,mercancia,id_medico)
        values('$_POST[representante]','$_POST[direccion]','$_POST[telefono]','$_POST[fecha]','$_POST[marca]','$_POST[mercancia]','$_POST[medico]')")
        or die ("Problemas en la consulta".mysqli_error());
        echo "<font color='green'>Proveedor Registrado Exitosamente</font>";
        }
        mysqli_close($dental);
        ?>
        <br />
        <br />
        <a href="formaltaproveedor.php">Regresar</a>
    </body>
</html>