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
    <title>Ver Receta</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/query/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilopagina.css">
  </head>
  <body>
    <center>
    <h1 id="tit">Recetas</h1>
    <?php
    $dental=mysqli_connect("localhost","root") or die ("Problemas con la conexion");
    mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la base de datos");
    $registro=mysqli_query($dental,"select * from receta inner join persona on receta.id_persona=persona.id_persona") or die ("Problemas con el select".mysqli_error());
    echo "<table border='1' bgcolor='silver'>";
      echo "<tr><td>Nombre de Paciente</td><td>Nombre del Medicamento</td><td>Fecha</td><td>Dosis</td><td>Observaciones</td></tr>";
      while ($reg=mysqli_fetch_array($registro))
      {
      echo $fila="<tr>";
        echo $fila="<td>".$reg['nombre']." ".$reg['apellidoP']."</td>";
        echo $fila="<td>".$reg['nombre_medicamento']."</td>";
        echo $fila="<td>".$reg['fecha']."</td>";
        echo $fila="<td>".$reg['dosis']."</td>";
        echo $fila="<td>".$reg['observaciones']."</td></tr>";
        
        }
      echo "</table>";
      mysqli_close($dental);
      ?></center>
      <br />
      <br />
      <center><img src="img/dientelimpio.png"/><br />
      <a href="VerM.php">Regresar</a></center>
      
    </body>
  </html>