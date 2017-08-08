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
            <td id="menu"><ul ><li><a href="administra_personasM.php"><font color="black">Paciente</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="administra_citaM.php"><font color="black">Cita</font></a></li><br /></ul></td>
        </table>
        <table>
            <td id="menu"><ul ><li><a href="administra_tratamientoM.php"><font color="black">Tratamiento</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="administra_recetaM.php"><font color="black">Receta</font></a></li><br /></ul></td>
        </table></center>
        <br /><br />
        <center><img src="img/dientelimpio.png"/><br />
        <a href="Medicos.php">Regresar</a></center>
    </body>
</html>