<?php
session_start();
if(isset($_SESSION['user']))
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilopagina.css">
    </head>
    <body>
        <center><h1 id="tit">Alta Tipo Servicio</h1>
        <fieldset id="feel">
            <form method="post" action="verificatipodeservicio.php">
                <font id="letras">  <strong>Ingrese el nombre del Tipo de Servicio: </strong></font>
                <input type="text" name="nombre"  size="20"  />
                <br /><br />
                <input type="submit" value="Registrar" id="input" class="btn btn-info btn-lg"/>
            </form></fieldset>
            <br />
            <img src="img/dientelimpio.png"/><br />
            <a href="Servicio.php">Regresar</a></center>
            
        </body>
    </html>