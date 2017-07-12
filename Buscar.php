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
            <td id="menu"><ul ><li><a href="buscarmedicoporespecialidad.php"><font color="black">Especialidad</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarmedicoporapellido.php"><font color="black">Apellido</font></a></li><br /></ul></td>
        </table>
        <h3 id="letras">Buscar proveedor por:<br /></h3>
        <table>
            <td id="menu"><ul ><li><a href="buscarprovedorpormarca.php"><font color="black">Marca</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarprovedorporrepresentante.php"><font color="black">Representante</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarprovedorpormedico.php"><font color="black">Medico</font></a></li><br /></ul></td>
        </table>
        <h3 id="letras">Buscar paciente por:<br /></h3>
        <table>
            <td id="menu"><ul ><li><a href="buscarpacientepormedico.php"><font color="black">Medico</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarpacienteporapellido.php"><font color="black">Apellido</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarpacienteporservicio.php"><font color="black">Servicio</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarpacienteporingreso.php"><font color="black">Fecha de ingreso</font></a></li><br /></ul></td>
        </table>
        <h3 id="letras">Buscar servicios por:<br /></h3>
        <table>
            <td id="menu"><ul><li><a href="buscarserviciopormedico.php"><font color="black">Medico</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarservicioporpaciente.php"><font color="black">Paciente</font></a></li><br /></ul></td>
        </table>
        <h3 id="letras">Buscar citas por:<br /></h3>
        <table>
            <td id="menu"><ul ><li><a href="buscarcitaporfecha.php"><font color="black">Fecha</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarcitaporservicio.php"><font color="black">Servicios</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarserviciopormedico.php"><font color="black">Medico</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarservicioporpaciente.php"><font color="black">Paciente</font></a></li><br /></ul></td>
        </table>
        <h3 id="letras">Buscar recetas por:<br /></h3>
        <table>
            <td id="menu"><ul ><li><a href="buscarrecetapormedicamento.php"><font color="black">Medicamentos</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarrecetapormedico.php"><font color="black">Medicos</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarrecetaporpaciente.php"><font color="black">Pacientes</font></a></li><br /></ul></td>
        </table>
        <h3 id="letras">Buscar tratamientos por:<br /></h3>
        <table>
            <td id="menu"><ul ><li><a href="buscartratamientopornombre.php"><font color="black">Nombre</font></a></li><br /></ul></td>
        </table>
        <h3 id="letras">Buscar expediente por:<br /></h3>
        <table>
            <td id="menu"><ul ><li><a href="buscarexpedienteporpaciente.php"><font color="black">Paciente</font></a></li><br /></ul></td>
            <td id="menu"><ul><li><a href="buscarexpedienteporingreso.php"><font color="black">Ingreso</font></a></li><br /></ul></td>
        </table>
        <br />
        <img src="img/dientelimpio.png"/><br />
        <a href="Administrador.php">Regresar</a>
    </body>
</html>