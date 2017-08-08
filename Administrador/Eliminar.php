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
            <td id="menu"><ul ><a href="eliminamedicos.php" class="btn btn-info btn-lg"><font color="black">Medico</font></a><br /></ul></td>
            <td id="menu"><ul><a href="eliminaproveedor.php" class="btn btn-info btn-lg"><font color="black">Proveedor</font></a><br /></ul></td>
            <td id="menu"><ul><a href="eliminapacientes.php" class="btn btn-info btn-lg"><font color="black">Paciente</font></a><br /></ul></td>
            <td id="menu"><ul><a href="eliminacitas.php" class="btn btn-info btn-lg"><font color="black">Cita</font></a><br /></ul></td>
        </table>
        <table>
            <td id="menu"><ul ><a href="eliminaservicio.php" class="btn btn-info btn-lg"><font color="black">Servicio</font></a><br /></ul></td>
            <td id="menu"><ul><a href="eliminatratamiento.php" class="btn btn-info btn-lg"><font color="black">Tratamiento</font></a><br /></ul></td>
            <td id="menu"><ul><a href="eliminareceta.php" class="btn btn-info btn-lg"><font color="black">Receta</font></a><br /></ul></td>
            <td id="menu"><ul><a href="eliminaexpediente.php" class="btn btn-info btn-lg"><font color="black">Expediente</font></a><br /></ul></td>
        </table>
        <br />
        <img src="img/dientelimpio.png"/><br />
        <a href="Administrador.php">Regresar</a></center>
    </body>
</html>