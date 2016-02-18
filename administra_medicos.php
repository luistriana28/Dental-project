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
<title>Medicos</title>
</head>
<body>
<center>
<h1 id="tit">MEDICOS</h1>

<?php 
$conexion=mysqli_connect("localhost","root","","dentaltorreon");
$registros=mysqli_query($conexion,"select * from medico");
echo "<table border=1 bgcolor='silver'>";
echo "<tr><th>NOMBRE</th><th>APELLIDO PATERNO</th><th>APELLIDO MATERNO<th>TELEFONO</th>
<th>CEDULA</th><th>ESPECIALIDAD</th></tr>";
while($fila=mysqli_fetch_array($registros))
{
    echo "<tr>";
    echo "<td>";
    echo $fila['nombre'];
    echo "</td><td>";
    echo $fila['apellidoP'];
    echo "</td><td>";
    echo $fila['apellidoM'];
    echo "</td><td>";
    echo $fila['telefono'];
    echo "</td><td>";
    echo $fila['cedula'];
    echo "</td><td>";
    echo $fila['especialidad'];
    echo "</td><td>";
    echo "<a href='registro_edita_medicos.php?medico=".$fila['id_medico']."'>Editar</a>";
    echo "</td>";
    echo "</tr>";
}
echo "</table>";
?>
<br />
<img src="img/dientelimpio.png"/><br />
<a href="Editar.php">Regresar</a></center>

<style>
body{
    background: url('img/log1.JPG');
}
#input[type=submit]:hover {
    cursor: pointer;
    background: #000040;
    color: white;
}
#tit{
    color: white;
    font-family: Baskerrille Old Face;
}
</style>
</body>
</html>
