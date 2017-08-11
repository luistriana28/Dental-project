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
                        <li class="active"><a href="inicioMedico.php">Inicio</a></li>
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
        <center><h1 id="letras">BUSCAR</h1></center>
        <h3 id="letras">Buscar paciente por:<br /></h3>
        <table>
            <td id="menu"><ul ><li><a href="buscarpacientepormedicoM.php"><font color="black">Medico</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarpacienteporapellidoM.php"><font color="black">Apellido</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarpacienteporservicioM.php"><font color="black">Servicio</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarpacienteporingresoM.php"><font color="black">Fecha de ingreso</font></a></li><br /></ul></td>
        </table>
        <h3 id="letras">Buscar citas por:<br /></h3>
        <table>
            <td id="menu"><ul ><li><a href="buscarcitaporfechaM.php"><font color="black">Fecha</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarcitaporservicioM.php"><font color="black">Servicios</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarcitapormedicoM.php"><font color="black">Medico</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarcitaporpacienteM.php"><font color="black">Paciente</font></a></li><br /></ul></td>
        </table>
        <h3 id="letras">Buscar recetas por:<br /></h3>
        <table>
            <td id="menu"><ul ><li><a href="buscarrecetapormedicamentoM.php"><font color="black">Medicamentos</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarrecetapormedicoM.php"><font color="black">Medicos</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarrecetaporpacienteM.php"><font color="black">Pacientes</font></a></li><br /></ul></td>
        </table>
        <h3 id="letras">Buscar tratamientos por:<br /></h3>
        <table>
            <td id="menu"><ul ><li><a href="buscartratamientopornombreM.php"><font color="black">Nombre</font></a></li><br /></ul></td>
        </table>
        <h3 id="letras">Buscar expediente por:<br /></h3>
        <table>
            <td id="menu"><ul ><li><a href="buscarexpedienteporpacienteM.php"><font color="black">Paciente</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarexpedienteporingresoM.php"><font color="black">Ingreso</font></a></li><br /></ul></td>
        </table>
    </body>
</html>