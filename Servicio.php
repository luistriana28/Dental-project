<?php
session_start();
if(isset($_SESSION['usuario']))
{
echo "<p align='right'></br><a href='logoutmedicos.php'>Cerrar Sesion</a></p>";
}
else
{
echo "<p align='right'><a href='login.php'>Login</a></p>";
}
?>
<html>
    <head>
        <title>Alta servicios</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <center><h1 id="M">Alta Servicios</h1></center>
        <center><table>
            <td id="menu"><ul ><a href="formaltatiposervicio.php" class="btn btn-info btn-lg"><font color="black">Tipo de servicio</font></a><br /></ul></td>
            <td id="menu"><ul><a href="formserviciocliente.php" class="btn btn-info btn-lg"><font color="black">Servicio al cliente</font></a><br /></ul></td>
        </table>
        <br />
        <img src="img/dientelimpio.png"/><br />
        <a href="registrar.php">Regresar</a></center>
        
    </body>
</html>