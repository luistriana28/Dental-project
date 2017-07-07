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
    <title>Eliminar Proveedor</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/query/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
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
  <br />
  <img src="img/dientelimpio.png"/><br />
  <a href="Eliminar.php">Regresar</a></center>
  <br />
  <style>
  body{
  background-image:url('img/log1.JPG');
  
  }
  #letras
  {
  color: black;
  font-family: Baskerrille Old Face;
  font-size: 20px;
  }
  #input[type=submit]:hover {
  cursor: pointer;
  background: #000040;
  color: white;
  }
  #feel{
  width: 425px;
  height: 120px;
  background: #88C4FF;
  }
  #tit{
  color: white;
  font-family: Baskerrille Old Face;
  }
  </style>
</body>
</html>