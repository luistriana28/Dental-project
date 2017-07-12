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
        <title>Eliminar</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        
        <center><h1 id="letras">ELIMINAR</h1>
        <table>
            <td id="menu"><ul ><li><a href="eliminamedicos.php"><font color="black">Medico</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="eliminaproveedor.php"><font color="black">Proveedor</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="eliminapacientes.php"><font color="black">Paciente</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="eliminacitas.php"><font color="black">Cita</font></a></li><br /></ul></td>
        </table>
        <table>
            <td id="menu"><ul ><li><a href="eliminaservicio.php"><font color="black">Servicio</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="eliminatratamiento.php"><font color="black">Tratamiento</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="eliminareceta.php"><font color="black">Receta</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="eliminaexpediente.php"><font color="black">Expediente</font></a></li><br /></ul></td>
        </table>
        <br />
        <img src="img/dientelimpio.png"/><br />
        <a href="Administrador.php">Regresar</a></center>
    </body>
</html>