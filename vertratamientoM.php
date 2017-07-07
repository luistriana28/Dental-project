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
  </head>
  <body>
    <center>
    <h1 id="tit">Tratamiento</h1>
    <?php
    $dental=mysqli_connect("localhost","root") or die ("Problemas con la conexion");
    mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la base de datos");
    echo "<table border='1' bgcolor='silver'><center>";
      echo "<tr><td>Nombre de Tratamiento: </td><td>Tipo de Servicio:</td><td>Comentarios:</td></tr>";
      $registro=mysqli_query($dental,"select * from tratamiento inner join tipodeservicio on
      tratamiento.id_TipoDeServicio=tipodeservicio.id_TipoDeServicio") or die ("Problemas con el select".mysqli_error());
      while ($reg=mysqli_fetch_array($registro))
      {
      echo "<tr>";
        echo "<font color='white'><td>".$reg['nombre_tratamiento']."</font></td>";
        echo "<font color='white'><td> ".$reg['nombre_servicio']."</font></td>";
        echo "<font color='white'><td>".$reg['comentarios']."</font></td></tr>";
        
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
      background-image:url('img/log1.jpg');
      
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