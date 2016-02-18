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
<title>Ver Expediente</title>
</head>
<body>
<center>
<h1 id="tit">Expedientes</h1>
<?php

$dental=mysqli_connect("localhost","root") or die ("Problemas con la conexion");

mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la base de datos");
$registro=mysqli_query($dental,"select * from expediente inner join persona where expediente.id_persona=persona.id_persona")
or die ("Problemas con el select".mysqli_error());

echo "<table border='1' bgcolor='silver'>";
echo "<tr><td>Paciente</td><td>Fecha de Ingreso</td><td>Comentarios</td></tr>";

while ($reg=mysqli_fetch_array($registro))
{
  echo $fila="<tr>";
  echo $fila="<td>".$reg['nombre']." ".$reg['apellidoP']." ".$reg['apellidoM']."</td>";
  echo $fila="<td>".$reg['ingreso']."</td>";
  echo $fila="<td>".$reg['comentarios']."</td>";
  echo $fila="</tr>";
}
echo "</table>";
mysqli_close($dental);
?></center>
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