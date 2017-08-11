<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Ver</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilopagina.css">
    </head>
    <body>
        <nav class="navbar navbar-default fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dental Torreon</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="inicioMedicos.php">Inicio</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(isset($_SESSION['user']))
                        {
                        echo "<li><a href='../PHP/logout.php'><span class='glyphicon glyphicon-user'> </span>".$_SESSION['user'][0].":  Cerrar Sesion</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
       
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
    </body>
</html>