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
                <a href="Registrar.php" class="btn btn-info btn-lg"><font color="black">REGISTRAR</font></a><br />
                <br />
                <a href="Buscar.php" class="btn btn-info btn-lg"><font color="black">BUSCAR</font></a><br />
                <br />
                <a href="Ver.php" class="btn btn-info btn-lg"><font color="black">VER</font></a><br />
                <br />
                <a href="Eliminar.php" class="btn btn-info btn-lg"><font color="black">ELIMINAR</font></a><br />
                <br />
                <a href="Editar.php" class="btn btn-info btn-lg"><font color="black">EDITAR</font></a><br />
                <br />
            </ul>
        </td>
    </table>
</body>
</html>