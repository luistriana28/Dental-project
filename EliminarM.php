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
<title>Eliminar</title>
</head>
<body>
<style>
body{
    background: url('img/log1.JPG');
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
<center><h1 id="letras">ELIMINAR</h1>
<table>
<td id="menu"><ul><li><a href="eliminapacientesM.php"><font color="black">Paciente</font></a></li><br /></ul></td>
<td id="menu"><ul><li><a href="eliminacitasM.php"><font color="black">Cita</font></a></li><br /></ul></td>
</table>
<table>
<td id="menu"><ul><li><a href="eliminatratamientoM.php"><font color="black">Tratamiento</font></a></li><br /></ul></td>
<td id="menu"><ul><li><a href="eliminarecetaM.php"><font color="black">Receta</font></a></li><br /></ul></td>
<td id="menu"><ul><li><a href="eliminaexpedienteM.php"><font color="black">Expediente</font></a></li><br /></ul></td>
</table>
<br /><br />
<img src="img/dientelimpio.png"/><br />
<a href="Medicos.php">Regresar</a></center>
</body>
</html>