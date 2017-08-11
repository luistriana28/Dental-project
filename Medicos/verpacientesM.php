<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Ver Paciente</title>
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
                        <li class="active"><a href="VerM.php">Inicio</a></li>
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
    </body>
  </html>