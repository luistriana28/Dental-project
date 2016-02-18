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
</head>
<body>
<style>
body{
    background: url('img/log1.jpg');
}
#M{
    color: white;
}
#Menu{
    width: 20px;
    margin-top: 50px;
}
#menu ul{
    list-style: none;
}
#menu ul li{
    margin-top: 15px;
    font-family: tahoma;
    font-size: 10px;
    background:  white;
    width: 160px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-radius: 0px 20px 20px 0px;
    padding-left: 10px;
    box-shadow: 10px 5px 15px #62B0FF;
    -wedkit-transition: padding-left 0.5s;
}
#menu ul li:hover{
    padding: 15px;
   
}
#letras{
    color: white;
}
</style>
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
<br />
<br />
<center><img src="img/dientelimpio.png"/><br />
<a href="Medicos.php">Regresar</a></center>


</body>
</html>