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
        
        <h1 id="M">Ver:</h1>
        <center><table>
            <td id="menu"><ul ><li><a href="vermedicos.php"><font color="black">Medicos</font></a></li><br /></ul></td>
            <td id="menu"><ul ><li><a href="verpacientes.php"><font color="black">Pacientes</font></a></li><br /></ul></td>
            <td id="menu"><ul ><li><a href="verproveedor.php"><font color="black">Proveedores</font></a></li><br /></ul></td>
            <td id="menu"><ul ><li><a href="vercitas.php"><font color="black">Citas</font></a></li><br /></ul></td>
        </table></center>
        <center><table>
            <td id="menu"><ul ><li><a href="verreceta.php"><font color="black">Receta</font></a></li><br /></ul></td>
            <td id="menu"><ul ><li><a href="vertratamiento.php"><font color="black">Tratamientos</font></a></li><br /></ul></td>
            <td id="menu"><ul ><li><a href="verexpediente.php"><font color="black">Expedientes</font></a></li><br /></ul></td>
        </table>
        <br />
        <img src="img/dientelimpio.png"/><br />
        <a href="Administrador.php">Regresar</a></center>
    </body>
</html>