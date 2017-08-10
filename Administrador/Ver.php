<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>ver</title>
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
                        <li class="active"><a href="inicioAdministrador.php">Inicio</a></li>
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
        <center><h1 id="M">Ver</h1>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>
                        <a href="verMedico.php" class="btn btn-sq-lg btn-primary">
                            <i class="fa fa-user fa-5x"></i><br/>
                            Medico
                        </a>
                        <a href="verPaciente.php" class="btn btn-sq-lg btn-success">
                            <i class="fa fa-user fa-5x"></i><br/>
                            Paciente
                        </a>
                        <a href="verProveedor.php" class="btn btn-sq-lg btn-info">
                            <i class="fa fa-user fa-5x"></i><br/>
                            Proveedor
                        </a>
                        <a href="verCita.php" class="btn btn-sq-lg btn-warning">
                            <i class="fa fa-user fa-5x"></i><br/>
                            Cita
                        </a>
                    </p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <p>
                        <a href="verReceta.php" class="btn btn-sq-lg btn-warning">
                            <i class="fa fa-user fa-5x"></i><br/>
                            Receta
                        </a>
                        <a href="verTratamiento.php" class="btn btn-sq-lg btn-danger">
                            <i class="fa fa-user fa-5x"></i><br/>
                            Tratamiento
                        </a>
                        <a href="verExpediente.php" class="btn btn-sq-lg btn-success">
                            <i class="fa fa-user fa-5x"></i><br/>
                            Expediente
                        </a>
                        <a></a>
                    </p>
                </div>
            </div>
        </div>
        </center>
    </body>
</html>