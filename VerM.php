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
        <title>ver</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
       
        <center><h1 id="M">Ver:</h1></center>
        <center><table>
            <td id="menu"><ul ><li><a href="verpacientesM.php"><font color="black">Pacientes</font></a></li><br /></ul></td>
            <td id="menu"><ul ><li><a href="vercitasM.php"><font color="black">Citas</font></a></li><br /></ul></td>
        </table></center>
        <center><table>
            <td id="menu"><ul ><li><a href="verrecetaM.php"><font color="black">Receta</font></a></li><br /></ul></td>
            <td id="menu"><ul ><li><a href="vertratamientoM.php"><font color="black">Tratamientos</font></a></li><br /></ul></td>
            <td id="menu"><ul ><li><a href="verexpedienteM.php"><font color="black">Expedientes</font></a></li><br /></ul></td>
        </table></center>
        <br />
        <center><img src="img/dientelimpio.png"/><br />
        <a href="Medicos.php">Regres</a></center>
    </body>
</html>