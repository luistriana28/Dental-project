<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Buscar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../Estilos/estiloBuscar.css">
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
        <div class="container">
            <div class="row">
                <h2 id="details" style="text-align: center;">Buscar</h2>
            </div><br>
            <!-- Pack 1-->
            <div class="col-md-3" id="home-box">
                <div class="pricing_header">
                    <h2>Medico</h2>
                    <div class="space"></div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarmedicoporespecialidad.php"> Especialidad</a></li>
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarmedicoporapellido.php"> Apellido</a></li>
                </ul>
            </div>
            <!-- Pack 2-->
            <div class="col-md-3" id="home-box">
                <div class="pricing_header">
                    <h2>Proveedor</h2>
                    <div class="space"></div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarprovedorpormarca.php"> Marca</a></li>
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarprovedorporrepresentante.php"> Representante</a></li>
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarprovedorpormedico.php"> Medico</a></li>
                </ul>
            </div>
            <!-- Pack 3-->
            <div class="col-md-3" id="home-box">
                <div class="pricing_header">
                    <h2>Paciente</h2>
                    <div class="space"></div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarpacientepormedico.php"> Medico</a></li>
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarpacienteporapellido.php"> Apellido</a></li>
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarpacienteporservicio.php"> Servicio</a></li>
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarpacienteporingreso.php"> Fecha de ingreso</a></li>
                </ul>
            </div>
            <!-- Pack 4-->
            <div class="col-md-3" id="home-box">
                <div class="pricing_header">
                    <h2>Servicio</h2>
                    <div class="space"></div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarserviciopormedico.php"> Medico</a></li>
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarservicioporpaciente.php"> Paciente</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <!-- Pack 5-->
            <div class="col-md-3" id="home-box">
                <div class="pricing_header">
                    <h2>Cita</h2>
                    <div class="space"></div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarcitaporfecha.php"> Fecha</a></li>
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarcitaporservicio.php"> Servicios</a></li>
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarserviciopormedico.php"> Medico</a></li>
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarservicioporpaciente.php"> Paciente</a></li>
                </ul>
            </div>
            <!-- Pack 6-->
            <div class="col-md-3" id="home-box">
                <div class="pricing_header">
                    <h2>Receta</h2>
                    <div class="space"></div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarrecetapormedicamento.php"> Medicamentos</a></li>
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarrecetapormedico.php"> Medicos</a></li>
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarrecetaporpaciente.php"> Pacientes</a></li>
                </ul>
            </div>
            <!-- Pack 7-->
            <div class="col-md-3" id="home-box">
                <div class="pricing_header">
                    <h2>Tratamiento</h2>
                    <div class="space"></div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscartratamientopornombre.php"> Nombre</a></li>
                </ul>
            </div>
            <!-- Pack 8-->
            <div class="col-md-3" id="home-box">
                <div class="pricing_header">
                    <h2>Expediente</h2>
                    <div class="space"></div>
                </div>
                <ul class="list-group">
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarexpedienteporpaciente.php"> Paciente</a></li>
                    <li class="list-group-item"><span class="glyphicon glyphicon-ok"></span><a href="buscarexpedienteporingreso.php"> Ingreso</a></li>
                </ul>
            </div>
        </div>
        
        
    </body>
</html>