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
      <div class="container">
        <div class="row">
          <div class="col-xs-offset-3 col-xs-6 col-xs-offset-3">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title">
                <span class="glyphicon glyphicon-bookmark"></span>Opciones</h3>
              </div>
              <div class="panel-body">
                <div class="row">
                  <div class="col-xs-6 col-md-6">
                    <a href="RegistrarM.php" class="btn btn-danger btn-lg" role="button"><span class="glyphicon glyphicon-list-alt"></span> <br/>Registrar</a>
                    <a href="EliminarM.php" class="btn btn-warning btn-lg" role="button"><span class="glyphicon glyphicon-bookmark"></span> <br/>Eliminar</a>
                  </div>
                  <div class="col-xs-6 col-md-6">
                    <a href="BuscarM.php" class="btn btn-success btn-lg" role="button"><span class="glyphicon glyphicon-user"></span> <br/>Buscar</a>
                    <a href="VerM.php" class="btn btn-primary btn-lg" role="button"><span class="glyphicon glyphicon-comment"></span> <br/>Ver</a>
                    <a href="EditarM.php" class="btn btn-info btn-lg" role="button"><span class="glyphicon glyphicon-file"></span> <br/>Editar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </body>
  </html>