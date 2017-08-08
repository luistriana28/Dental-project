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
        <center><h1 id="M">REGISTRAR</h1></center>
        <div class="wrapper">
            <table id="acrylic" style="text-align: center;">
                <thead>
                    <tr>
                        <th colspan="2">Opciones de Administrador</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><a href="nuevousuario.php">Nuevo usuario</a></td>
                        <td><a href="RegServicioCliente.php">Servicio al Cliente</a></td>
                    </tr>
                    <tr>
                        <td><a href="regMedico.php">Medico</a></td>
                        <td><a href="regPaciente.php">Paciente</a></td>
                        
                    </tr>
                    <tr>
                        <td><a href="regProveedor.php">Proveedor</a></td>
                        <td><a href="regReceta.php">Receta</a></td>
                        
                    </tr>
                    <tr>
                        <td><a href="regTipoDeServicio.php">Tipo de Servicio</a></td>
                        <td><a href="regCita.php">Cita</a></td>
                    </tr>
                    <tr>
                        <td><a href="regTratamiento.php">Tratamiento</a></td>
                        <td><a href="regExpediente.php">Expediente</a></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <center>
        <img src="../img/dientelimpio.png"/><br />
        <a href="../Administrador/inicioAdministrador.php" >Regresar</a>
        </center>
    </body>
</html>