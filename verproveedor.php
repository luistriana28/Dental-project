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
    <title>Ver Proveedor</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/query/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilopagina.css">
  </head>
  <body>
    <center><h1 id="tit">Proveedores</h1>
    <?php
    $dental=mysqli_connect("localhost","root") or die ("Problemas con la conexion");
    mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la base de datos");
    echo "<table border='1' bgcolor='silver'>";
      echo "<tr><td>Representante</td><td>Direccion</td><td>Telefono</td><td>Fecha</td><td>Marca</td><td>Mercancia</td></tr>";
      $registro=mysqli_query($dental,"select * from provedor") or die ("Problemas con el select".mysqli_error());
      while ($reg=mysqli_fetch_array($registro))
      {
      echo $fila="<tr>";
        echo $fila="<td>".$reg['representante']."</td>";
        echo $fila="<td>".$reg['direccion']."</td>";
        echo $fila="<td>".$reg['telefono']."</td>";
        echo $fila="<td>".$reg['fecha']."</td>";
        echo $fila="<td>".$reg['marca']."</td>";
        echo $fila="<td>".$reg['mercancia']."</td></tr>";
        
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