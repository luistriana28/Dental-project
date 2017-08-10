<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
  <head>
    <title>Ver Citas</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
    <script src="bootstrap/query/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../Estilos/estilopagina.css">
  </head>
  <body>
    <nav class="navbar navbar-default fixed">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Dental Torreon</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav">
            <li class="active"><a href="Ver.php">Inicio</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php
            if(isset($_SESSION['user']))
            {
            echo "<li><a href='../PHP/logout.php'><span class='glyphicon glyphicon-user'> </span>".$_SESSION['user'][0].":  Cerrar Sesion</a></li>";
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <center><h1 id="tit">Citas</h1>
    <?php
    $dental=mysqli_connect("localhost","root") or die ("Problemas con la conexion");
    mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la base de datos");
    echo "<table border='1' bgcolor='silver'>";
      echo "<tr><td>Fecha</td><td>Nombre de Paciente</td><td>Nombre de Servicio</td></tr>";
      $registro=mysqli_query($dental,"select * from cita inner join persona on
      cita.id_persona=persona.id_persona inner join tipodeservicio on cita.id_TipoDeServicio=tipodeservicio.
      id_TipoDeServicio") or die ("Problemas con el select".mysqli_error());
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
    ?>
    </center>
  </body>
</html>