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
            <style>
            body{
            background-image:url('img/log1.JPG');
            
            }
            #letras
            {
            color: black;
            font-family: Baskerrille Old Face;
            font-size: 20px;
            }
            #input[type=submit]:hover {
            cursor: pointer;
            background: #000040;
            color: white;
            }
            #feel{
            width: 425px;
            height: 130px;
            background: #88C4FF;
            }
            #tit{
            color: white;
            font-family: Baskerrille Old Face;
            }
            </style>
        </body>
    </html>