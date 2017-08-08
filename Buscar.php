<?php
session_start();
if(isset($_SESSION['usuario']))
{
echo "<p align='right'><a href='index.php'>Cerrar Sesion</a></p>";
}
else
{
echo "<p align='right'><a href='loginmedicos.php'>Login</a></p>";
}
?>
<html>
    <head>
        <title>Buscar</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        
        <center><h1 id="letras">BUSCAR</h1></center>
        <h3 id="letras">Buscar medico por:<br /></h3> 
        <table>
            <td id="menu"><ul ><a href="buscarmedicoporespecialidad.php"class="btn btn-info btn-lg" ><font color="black">Especialidad</font></a><br /></ul></td>
            <td id="menu"><ul><a href="buscarmedicoporapellido.php" class="btn btn-info btn-lg"><font color="black">Apellido</font></a><br /></ul></td>
        </table>
        <h3 id="letras">Buscar proveedor por:<br /></h3>
        <table>
            <td id="menu"><ul ><a href="buscarprovedorpormarca.php" class="btn btn-info btn-lg"><font color="black">Marca</font></a><br /></ul></td>
            <td id="menu"><ul><a href="buscarprovedorporrepresentante.php" class="btn btn-info btn-lg"><font color="black">Representante</font></a><br /></ul></td>
            <td id="menu"><ul><a href="buscarprovedorpormedico.php" class="btn btn-info btn-lg"><font color="black">Medico</font></a><br /></ul></td>
        </table>
        <h3 id="letras">Buscar paciente por:<br /></h3>
        <table>
            <td id="menu"><ul ><a href="buscarpacientepormedico.php" class="btn btn-info btn-lg"><font color="black">Medico</font></a><br /></ul></td>
            <td id="menu"><ul><a href="buscarpacienteporapellido.php" class="btn btn-info btn-lg"><font color="black">Apellido</font></a><br /></ul></td>
            <td id="menu"><ul><a href="buscarpacienteporservicio.php" class="btn btn-info btn-lg"><font color="black">Servicio</font></a><br /></ul></td>
            <td id="menu"><ul><a href="buscarpacienteporingreso.php" class="btn btn-info btn-lg"><font color="black">Fecha de ingreso</font></a><br /></ul></td>
        </table>
        <h3 id="letras">Buscar servicios por:<br /></h3>
        <table>
            <td id="menu"><ul><a href="buscarserviciopormedico.php" class="btn btn-info btn-lg"><font color="black">Medico</font></a><br /></ul></td>
            <td id="menu"><ul><a href="buscarservicioporpaciente.php" class="btn btn-info btn-lg"><font color="black">Paciente</font></a><br /></ul></td>
        </table>
        <h3 id="letras">Buscar citas por:<br /></h3>
        <table>
            <td id="menu"><ul ><a href="buscarcitaporfecha.php" class="btn btn-info btn-lg"><font color="black">Fecha</font></a><br /></ul></td>
            <td id="menu"><ul><a href="buscarcitaporservicio.php" class="btn btn-info btn-lg"><font color="black">Servicios</font></a><br /></ul></td>
            <td id="menu"><ul><a href="buscarserviciopormedico.php" class="btn btn-info btn-lg"><font color="black">Medico</font></a><br /></ul></td>
            <td id="menu"><ul><a href="buscarservicioporpaciente.php" class="btn btn-info btn-lg"><font color="black">Paciente</font></a><br /></ul></td>
        </table>
        <h3 id="letras">Buscar recetas por:<br /></h3>
        <table>
            <td id="menu"><ul ><a href="buscarrecetapormedicamento.php" class="btn btn-info btn-lg"><font color="black">Medicamentos</font></a><br /></ul></td>
            <td id="menu"><ul><a href="buscarrecetapormedico.php" class="btn btn-info btn-lg"><font color="black">Medicos</font></a><br /></ul></td>
            <td id="menu"><ul><a href="buscarrecetaporpaciente.php" class="btn btn-info btn-lg"><font color="black">Pacientes</font></a><br /></ul></td>
        </table>
        <h3 id="letras">Buscar tratamientos por:<br /></h3>
        <table>
            <td id="menu"><ul ><a href="buscartratamientopornombre.php" class="btn btn-info btn-lg"><font color="black">Nombre</font></a><br /></ul></td>
        </table>
        <h3 id="letras">Buscar expediente por:<br /></h3>
        <table>
            <td id="menu"><ul ><a href="buscarexpedienteporpaciente.php" class="btn btn-info btn-lg"><font color="black">Paciente</font></a><br /></ul></td>
            <td id="menu"><ul><a href="buscarexpedienteporingreso.php" class="btn btn-info btn-lg"><font color="black">Ingreso</font></a><br /></ul></td>
        </table>
        <br />
        <img src="img/dientelimpio.png"/><br />
        <a href="Administrador.php">Regresar</a>
    </body>
</html>