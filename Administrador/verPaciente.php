<?php
session_start();
if(isset($_SESSION['user']))
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilopagina.css">
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
      echo "</tr>";
      
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