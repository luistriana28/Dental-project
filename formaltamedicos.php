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
        <title>Alta Medico</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <center><h1 id="tit">Alta de Medico</h1>
        <fieldset id="feel">
            <form method="post" action="verificaaltamedicos.php">
                <font id="letras">Cedula:</font> <input type="text" name="cedula" size="20" maxlength="15" /><br />
                <font id="letras">Especialidad:</font> <input type="text" name="especialidad" size="20" maxlength="30" /><br />
                <font id="letras">Nombre:</font> <input type="text" name="nombre" size="20" maxlength="30" /><br />
                <font id="letras">Apellido Paterno:</font> <input type="text" name="apellidoP" size="20" maxlength="30" /><br />
                <font id="letras">Apellido Materno:</font> <input type="text" name="apellidoM" size="20"maxlength="30" /><br />
                <font id="letras">Telefono:</font> <input type="text" name="telefono" size="10" maxlength="10" /><br />
                <br />
                <input type="submit" value="Registrar" id="input"/>
            </form></fieldset>
            <br />
            <img src="img/dientelimpio.png"/><br />
            <a href="registrar.php">Regresar</a></center>
            
        </body>
    </html>