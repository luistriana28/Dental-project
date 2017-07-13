<?php
session_start();
if(isset($_SESSION['user']))
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
        <title>Administrador</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
       
        <center><h1 id="M">ADMINISTRADOR</h1></center>
        <table>
            <td id="menu"><ul >
                <li><a href="Registrar.php"><font color="black">REGISTRAR</font></a></li><br />
                <li><a href="Buscar.php"><font color="black">BUSCAR</font></a></li><br />
                <li><a href="Ver.php"><font color="black">VER</font></a></li><br />
                <li><a href="Eliminar.php"><font color="black">ELIMINAR</font></a></li><br />
                <li><a href="Editar.php"><font color="black">EDITAR</font></a></li><br />
            </ul>
        </td>
    </table>
</body>
</html>