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
        <title>Alta Tipo Servicio</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <center><h1 id="tit">Alta Tipo Servicio</h1>
        <fieldset id="feel">
            <form method="post" action="verificatipodeservicio.php">
                <font id="letras">Ingrese el nombre del Tipo de Servicio:</font>
                <input type="text" name="nombre"  size="40"  />
                <br /><br />
                <input type="submit" value="Registrar" id="input"/>
            </form></fieldset>
            <br />
            <img src="img/dientelimpio.png"/><br />
            <a href="Servicio.php">Regresar</a></center>
            
        </body>
    </html>