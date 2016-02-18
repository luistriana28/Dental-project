<?php
session_start();

if(!isset($_SESSION['usuario'])) 
{
  header('Location: loginmedicos.php'); 
}
 
echo "<p align='right'>"."<a href='logoutmedicos.php'>[Cerrar Sesión]</a></p>";
?>
<html>
<head>
<title>Pacientes</title>
</head>
<body>
<center>
<h1 id="tit">PACIENTES</h1>
<?php 
$conexion=mysqli_connect("localhost","root","","dentaltorreon");
$registros=mysqli_query($conexion,"select * from persona");
echo "<table border=1 bgcolor='silver'>";
echo "<tr><th>NOMBRE</th><th>APELLIDO PATERNO</th><th>APELLIDO MATERNO<th>DIRECCION</th>
<th>TELEFONO</th><th>EDAD</th></tr>";
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
    echo $fila['direccion'];
    echo "</td><td>";
    echo $fila['telefono'];
    echo "</td><td>";
    echo $fila['edad'];
    echo "</td><td>";
    echo "<a href='registro_edita_personas.php?persona=".$fila['id_persona']."'>Editar</a>";
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
