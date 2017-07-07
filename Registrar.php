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
    </head>
    <body>
        <style>
        body{
        background: url('img/log1.JPG') no-repeat;
        }
        #M{
        color: white;
        }
        #Menu{
        width: 20px;
        margin-top: 50px;
        }
        #menu ul{
        list-style: none;
        }
        #menu ul li{
        margin-top: 15px;
        font-family: tahoma;
        font-size: 10px;
        background:  white;
        width: 160px;
        padding-top: 10px;
        padding-bottom: 10px;
        border-radius: 0px 20px 20px 0px;
        padding-left: 10px;
        box-shadow: 10px 5px 15px #FFFF8A;
        -wedkit-transition: padding-left 0.5s;
        }
        #menu ul li:hover{
        padding: 15px;
        
        }
        </style>
        <center><h1 id="M">REGISTRAR</h1></center>
        <center>
        <center><table>
            <td id="menu"><ul><li><a href="nuevousuario.php"><font color="black">Nuevo usuario</font></a></li><br /></ul></td>
        </table>
        </center>
        <center><table>
            <td id="menu"><ul ><li><a href="formaltamedicos.php"><font color="black">Medico</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="formaltapacientes.php"><font color="black">Paciente</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="formaltaproveedor.php"><font color="black">Proveedor</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="Servicio.php"><font color="black">Servicio</font></a></li><br /></ul></td>
        </table></center>
        <center><table>
            <td id="menu"><ul><li><a href="formaltacita.php"><font color="black">Cita</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="formaltatratamiento.php"><font color="black">Tratamiento</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="formaltareceta.php"><font color="black">Receta</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="formaltaexpediente.php"><font color="black">Expediente</font></a></li><br /></ul></td>
        </table></center>
        <br />
        <img src="img/dientelimpio.png"/><br />
        <a href="administrador.php">Regresar</a>
    </body>
</html>