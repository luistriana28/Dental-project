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
        <title>Alta Expediente</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <?php
        $ingreso=$_POST['ingreso'];
        $comentarios=$_POST['comentarios'];
        $dental=mysqli_connect("localhost","root") or die ("Problemas con la conexion");
        mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la base de datos");
        if($comentarios==null||ingreso==null)
        {
        echo"<font color='red'>hay campos vacios verifica porfavor</font>";
        }
        else
        {
        mysqli_query($dental,"insert into expediente(id_persona,ingreso,comentarios)
        values($_POST[paciente],'$_POST[ingreso]','$_POST[comentarios]')")
        or die ("Problemas en la consulta".mysqli_error());
        echo "<font color='green'>Expediente Registrado Exitosamente</font>";
        }
        mysqli_close($dental);
        ?>
        <br />
        <br />
        <a href="formaltaexpediente.php">Regresar</a>
    </body>
</html>