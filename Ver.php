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
            <td id="menu"><ul ><a href="vermedicos.php" class="btn btn-info btn-lg"><font color="black">Medicos</font></a><br /></ul></td>
            <td id="menu"><ul ><a href="verpacientes.php" class="btn btn-info btn-lg"><font color="black">Pacientes</font></a><br /></ul></td>
            <td id="menu"><ul ><a href="verproveedor.php" class="btn btn-info btn-lg"><font color="black">Proveedores</font></a><br /></ul></td>
            <td id="menu"><ul ><a href="vercitas.php" class="btn btn-info btn-lg"><font color="black">Citas</font></a><br /></ul></td>
        </table></center>
        <center><table>
            <td id="menu"><ul ><a href="verreceta.php" class="btn btn-info btn-lg"><font color="black">Receta</font></a><br /></ul></td>
            <td id="menu"><ul ><a href="vertratamiento.php" class="btn btn-info btn-lg"><font color="black">Tratamientos</font></a><br /></ul></td>
            <td id="menu"><ul ><a href="verexpediente.php" class="btn btn-info btn-lg"><font color="black">Expedientes</font></a><br /></ul></td>
        </table>
        <br />
        <img src="img/dientelimpio.png"/><br />
        <a href="Administrador.php">Regresar</a></center>
    </body>
</html>