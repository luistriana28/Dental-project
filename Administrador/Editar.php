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
        <title>Editar</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        
        <center><h1 id="letras">EDITAR</h1></center>
        <center>
        <table>
            <td id="menu"><ul ><a href="administra_medicos.php" class="btn btn-info btn-lg"><font color="black">Medico</font></a><br /></ul></td>
            <td id="menu"><ul><a href="administra_proveedores.php" class="btn btn-info btn-lg"><font color="black">Proveedor</font></a><br /></ul></td>
            <td id="menu"><ul ><a href="administra_personas.php" class="btn btn-info btn-lg"><font color="black">Paciente</font></a><br /></ul></td>
            <td id="menu"><ul><a href="edCita.php" class="btn btn-info btn-lg"><font color="black">Cita</font></a><br /></ul></td>
        </table>
        <table>
            <td id="menu"><ul ><a href="administra_tratamiento.php" class="btn btn-info btn-lg"><font color="black">Tratamiento</font></a><br /></ul></td>
            <td id="menu"><ul><a href="administra_receta.php" class="btn btn-info btn-lg" ><font color="black">Receta</font></a><br /></ul></td>
        </table>
        <br /><br />
        <img src="img/dientelimpio.png"/><br />
        <a href="Administrador.php">Regresar</a></center>
    </body>
</html>