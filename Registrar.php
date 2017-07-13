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
        <title>REGISTRAR</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
       
        <center><h1 id="M">REGISTRAR</h1></center>
        <center>
        <center><table>
            <td id="menu"><ul><a href="nuevousuario.php" class="btn btn-info btn-lg"><font color="black">Nuevo usuario</font></a><br /></ul></td>
            <br />
        </table>
        </center>
        <center><table>
            <td id="menu"><ul ><a href="formaltamedicos.php" class="btn btn-info btn-lg"><font color="black">Medico</font></a><br /></ul></td>
            <td id="menu"><ul><a href="formaltapacientes.php" class="btn btn-info btn-lg"><font color="black">Paciente</font></a><br /></ul></td>
            <td id="menu"><ul><a href="formaltaproveedor.php" class="btn btn-info btn-lg"><font color="black">Proveedor</font></a><br /></ul></td>
            <td id="menu"><ul><a href="Servicio.php" class="btn btn-info btn-lg"><font color="black">Servicio</font></a><br /></ul></td>
        </table></center>
        <center><table>
            <td id="menu"><ul><a href="formaltacita.php" class="btn btn-info btn-lg"><font color="black">Cita</font></a><br /></ul></td>
            <td id="menu"><ul><a href="formaltatratamiento.php" class="btn btn-info btn-lg"><font color="black">Tratamiento</font></a><br /></ul></td>
            <td id="menu"><ul><a href="formaltareceta.php" class="btn btn-info btn-lg"><font color="black">Receta</font></a><br /></ul></td>
            <td id="menu"><ul><a href="formaltaexpediente.php" class="btn btn-info btn-lg"><font color="black">Expediente</font></a><br /></ul></td>
        </table></center>
        <br />
        <img src="img/dientelimpio.png"/><br />
        <a href="administrador.php" >Regresar</a>
    </body>
</html>