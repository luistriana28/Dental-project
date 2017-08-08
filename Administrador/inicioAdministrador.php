<?php
session_start();
if (empty($_SESSION["user"])) {
    header("Location:../index.php");
  }
?>
<html>
    <head>
        <title>Administrador</title>
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