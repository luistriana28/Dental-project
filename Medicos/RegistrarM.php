<?php
session_start();
?>
<html>
    <head>
        <title>REGISTRAR</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
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
        <div class="wrapper">
            <table id="acrylic" style="text-align: center;">
                <thead>
                    <tr>
                        <th colspan="2">Opciones de Medico</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="regPacientesM.php">Paciente</a></td>
                        <td><a href="regServicioCliente.php">Servicio</a></td>
                        
                    </tr>
                    <tr>
                        <td><a href="regExpedienteM.php">Expediente</a></td>
                        <td><a href="regRecetaM.php">Receta</a></td>
                        
                    </tr>
                    <tr>
                        <td><a href="regTratamientoM.php">Tratamiento</a></td>
                        <td><a href="regCitaM.php">Cita</a></td>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="regTipoDeServicioM.php">Tipo de Servicio</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <center>
        <img src="../img/dientelimpio.png"/><br />
        <a href="../Medicos/inicioMedicos.php" >Regresar</a>
        </center>
    </body>
</html>