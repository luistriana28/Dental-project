<?php
session_start();
if (empty($_SESSION["user"])) {
    header("Location:../index.php");
  }
?>
<html>
    <head>
        <head>
        <title>Medico</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/query/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
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
                                <li class="active"><a href="#">Inicio</a></li>
                          </ul>
                          <ul class="nav navbar-nav navbar-right">
                          <?php
                          if(isset($_SESSION['user']))
                            {
                            echo "<li><a href='../index.php'><span class='glyphicon glyphicon-user'></span> Cerrar Sesion</a></li>";
                            }
                          ?>
                          </ul>
                    </div>
              </div>
        </nav>
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