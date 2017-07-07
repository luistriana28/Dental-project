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
        <title>ver</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <style>
        body{
        background: url('img/log1.JPG');
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
        box-shadow: 10px 5px 15px #62B0FF;
        -wedkit-transition: padding-left 0.5s;
        }
        #menu ul li:hover{
        padding: 15px;
        
        }
        </style>
        <center><h1 id="M">Ver:</h1></center>
        <center><table>
            <td id="menu"><ul ><li><a href="verpacientesM.php"><font color="black">Pacientes</font></a></li><br /></ul></td>
            <td id="menu"><ul ><li><a href="vercitasM.php"><font color="black">Citas</font></a></li><br /></ul></td>
        </table></center>
        <center><table>
            <td id="menu"><ul ><li><a href="verrecetaM.php"><font color="black">Receta</font></a></li><br /></ul></td>
            <td id="menu"><ul ><li><a href="vertratamientoM.php"><font color="black">Tratamientos</font></a></li><br /></ul></td>
            <td id="menu"><ul ><li><a href="verexpedienteM.php"><font color="black">Expedientes</font></a></li><br /></ul></td>
        </table></center>
        <br />
        <center><img src="img/dientelimpio.png"/><br />
        <a href="Medicos.php">Regres</a></center>
    </body>
</html>