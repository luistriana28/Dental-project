<?php
session_start();
if(isset($_SESSION['usuario']))
{
echo "<p align='right'>Usuario: ".$_SESSION['usuario']."</br><a href='index.php'>Cerrar Sesion</a></p>";
}
else
{
echo "<p align='right'><a href='loginmedicos.php'>Login</a></p>";
}
?>
<html>
    <head>
        <title>
        </title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        
        <center><h1 id="M">MEDICO</h1></center>
        <table>
            <td id="menu"><ul >
                <li><a href="RegistrarM.php"><font color="black">REGISTRAR</font></a></li><br />
                <li><a href="BuscarM.php"><font color="black">BUSCAR</font></a></li><br />
                <li><a href="VerM.php"><font color="black">VER</font></a></li><br />
                <li><a href="EliminarM.php"><font color="black">ELIMINAR</font></a></li><br />
                <li><a href="EditarM.php"><font color="black">EDITAR</font></a></li><br />
            </ul>
        </td>
    </body>
</html>