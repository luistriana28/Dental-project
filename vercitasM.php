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
    <title>Ver Citas</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/query/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <center><h1 id="tit">Citas</h1>
    <?php
    $dental=mysqli_connect("localhost","root") or die ("Problemas con la conexion");
    mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la base de datos");
    echo "<table border='1' bgcolor='silver'>";
      echo "<tr><td>Fecha</td><td>Nombre de Paciente</td><td>Nombre de Servicio</td></tr>";
      $registro=mysqli_query($dental,"select cita.fecha,persona.nombre,
      persona.apellidoP,tipodeservicio.nombre_servicio from cita inner join persona on cita.id_persona=persona.id_persona
      inner join tipodeservicio on cita.id_TipoDeServicio=tipodeservicio.id_TipoDeServicio")
      or die ("Problemas con el select".mysqli_error());
      while ($reg=mysqli_fetch_array($registro))
      {
      echo "<tr>";
        echo $fila="<td>".$reg['fecha']."</td>";
        echo $fila="<td>".$reg['nombre']." ".$reg['apellidoP']."</td>";
        echo $fila="<td>".$reg['nombre_servicio']."</td>";
      echo "</tr>";
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