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
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/query/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilopagina.css">
  </head>
  <body>
    <center>
    <h1 id="tit">Tratamiento</h1>
    <?php
    $dental=mysqli_connect("localhost","root") or die ("Problemas con la conexion");
    mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la base de datos");
    $registro=mysqli_query($dental,"select * from tratamiento inner join tipodeservicio on
    tratamiento.id_TipoDeServicio=tipodeservicio.id_TipoDeServicio") or die ("Problemas con el select".mysqli_error());
    echo "<center><table border='1' bgcolor='silver
      '><tr><td>Tipo de Servicio</td><td>Nombre de Tratamiento</td><td>Comentarios</td>";
      while ($reg=mysqli_fetch_array($registro))
      {
      echo "<tr>";
        echo "<td>".$reg['nombre_servicio']."</td>";
        echo "<td>".$reg['nombre_tratamiento']."</td>";
        echo "<td>".$reg['comentarios']."</td></tr>";
        
        
        }
      echo "</table>";
      mysqli_close($dental);
      ?>
      <br />
      <br />
      <img src="img/dientelimpio.png"/><br />
      <a href="Ver.php">Regresar</a></center>
      
    </body>
  </html>