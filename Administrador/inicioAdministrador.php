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
    <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
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
            <li class="active"><a href="inicioAdministrador.php">Inicio</a></li>
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
    <center><h1 id="M">ADMINISTRADOR</h1>
    <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>
                        <a href="Registrar.php" class="btn btn-sq-lg btn-primary">
                            <i class="fa fa-user fa-5x"></i><br/>
                            Registrar
                        </a>
                        <a href="Eliminar.php" class="btn btn-sq-lg btn-success">
                            <i class="fa fa-user fa-5x"></i><br/>
                            Eliminar
                        </a>
                        <a href="Ver.php" class="btn btn-sq-lg btn-warning">
                            <i class="fa fa-user fa-5x"></i><br/>
                            Ver
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>
                        <a href="Editar.php" class="btn btn-sq-lg btn-danger">
                            <i class="fa fa-user fa-5x"></i><br/>
                            Editar
                        </a>
                        <a href="Buscar.php" class="btn btn-sq-lg btn-info">
                            <i class="fa fa-user fa-5x"></i><br/>
                            Buscar
                        </a>
                    </p>
                </div>
            </div>
        </div>
        </center>
  </body>
</html>