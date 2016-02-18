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
<title>Ver Pacientes</title>
</head>
<body>
<center><h1 id="tit">Pacientes</h1>
<?php

$dental=mysqli_connect("localhost","root") or die ("Problemas con la conexion");

mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la base de datos");
$registro=mysqli_query($dental,"select * from persona") or die ("Problemas con el select".mysqli_error());
echo "<table border='1' bgcolor='silver'>";
echo "<tr><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Direccion</td><td>Telefono</td><td>Edad</td></tr>";

while ($reg=mysqli_fetch_array($registro))
{
   echo $fila="<tr>";
   echo $fila="<td>".$reg['nombre']."</td>";
   echo $fila="<td>".$reg['apellidoP']."</td>";
   echo $fila="<td>".$reg['apellidoM']."</td>";
   echo $fila="<td>".$reg['direccion']."</td>";
   echo $fila="<td>".$reg['telefono']."</td>";
   echo $fila="<td>".$reg['edad']."</td></tr>";
  
}
echo "</table>";
mysqli_close($dental);
?>
</center>
<br />
<br />
<center><img src="img/dientelimpio.png"/><br />
<a href="VerM.php">Regresar</a></center>
<style>
body{
  background-image:url('img/log1.JPG'); 
    

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