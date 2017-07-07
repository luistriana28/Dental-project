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
        box-shadow: 10px 5px 15px #62B0FF;
        -wedkit-transition: padding-left 0.5s;
        }
        #menu ul li:hover{
        padding: 15px;
        
        }
        </style>
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