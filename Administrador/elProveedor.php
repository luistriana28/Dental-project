<?php
session_start();
?>
<html>
  <head>
    <title>Eliminar Proveedor</title>
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
            <li class="active"><a href="Eliminar.php">Inicio</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php
            if(isset($_SESSION['user']))
            {
            echo "<li><a href='../index.php'><span class='glyphicon glyphicon-user'></span> Cerrar Sesion</a></li>";
            }
            ?>
          </ul>
        </div>
      </div>
    </nav>
    <center><h1 id="tit">Eliminar proveedor</h1>
    <fieldset id="feel"><form method="post">
    </a><font id="letras">Proveedor a Eliminar:</font><br />
    <?php
    $conexion=mysqli_connect("localhost","root")
    or die("Problemas de conexion");
    mysqli_select_db($conexion,"dentaltorreon")
    or die ("Problemas de conexion de la base de datos");
    $consulta="select * from provedor";
    $res=mysqli_query($conexion,$consulta);
    echo "<select name='codi'>";
      while($ver=mysqli_fetch_array($res))
      {
      echo "<option value='".$ver['id_provedor']."'>".$ver['representante']."-----".$ver['marca']."</option>";
      }
    echo "</select><br/>";
    ?>
    <br />
    <br />
    <input type="submit" value="Eliminar" id="input"/>
  </form></fieldset>
  <?php
  if (isset($_POST['codi']))
  {
  $dental=mysqli_connect("localhost","root")
  or die ("Problemas de Conexion");
  mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la BD");
  $registro=mysqli_query($dental,"select id_provedor,mercancia,fecha,marca,id_medico,nombre,direccion,telefono
  from provedor where id_provedor='$_POST[codi]'") or die ("Problemas en la consulta");
  
  if ($reg=mysqli_fetch_array($registro))
  {
  echo "<font color='white'>Codigo: ".$reg['id_provedor']."</font></br>";
  echo "<font color='white'>Nombre: ".$reg['nombre']."</font></br>";
  echo "<font color='white'>Direccion: ".$reg['direccion']."</font></br>";
  echo "<font color='white'>Telefono: ".$reg['telefono']."</font></br>";
  echo "<font color='white'>Fecha: ".$reg['fecha']."</font></br>";
  echo "<font color='white'>Marca: ".$reg['marca']."</font></br>";
  echo "<font color='white'>Mercancia: ".$reg['mercancia']."</font></br>";
  echo "<font color='white'>Numero del Medico".$reg['id_medico']."</font></br>";
  
  mysqli_query($dental,"delete from provedor where id_provedor='$_POST[codi]'")
  or die ("Problemas con el delete");
  echo "<h4><font color='white'>Se elimino el Proveedor</font></h4>";
  }
  else
  {
  echo "<font color='white'>No existe ese Proveedor</font>";
  }
  mysqli_close($dental);
  }
  ?>
</body>
</html>