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
<title>Editar Cita</title>
</head>
<body>
<center>
<h1 id="tit">CITA</h1>
<?php 
$conexion=mysqli_connect("localhost","root","","dentaltorreon");
$registros=mysqli_query($conexion,"select * from cita inner join persona where cita.id_persona=persona.id_persona");
echo "<table border=1 bgcolor='silver'>";
echo "<tr><th>Fecha de Cita</th><th>Nombre del Paciente</th></tr>";
while($fila=mysqli_fetch_array($registros))
{
    echo "<tr>";
    echo "<td>";
    echo $fila['fecha'];
    echo "</td><td>";
    echo $fila['nombre']." ".$fila['apellidoP'];
    echo "</td><td>";
    echo "<a href='registro_edita_cita.php?cita=".$fila['id_Cita']."&fecha=".$fila['fecha']."'>Editar</a>";
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
