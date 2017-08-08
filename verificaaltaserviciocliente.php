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
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
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
        <a href="formserviciocliente.php">Regresar</a>
    </body>
</html>