<?php
session_start();

if(!isset($_SESSION['usuario'])) 
{
  header('Location: loginmedicos.php'); 
}
 
echo "<p align='right'>"."<a href='logoutmedicos.php'>[Cerrar Sesión]</a></p>";
?>
<html>
<head>
<title>Modificacion de Tratamiento</title>
</head>  
<body>
<center>
  <?php
    $conex=mysqli_connect("localhost","root","","dentaltorreon") or 
      die("Problemas con la conexión a la base de datos");
	  
    $regi=mysqli_query($conex,"select * from tratamiento where id_tratamiento='$_GET[tratamiento]'") 
    or die(mysqli_error());
	 
    if ($reg=mysqli_fetch_array($regi))
    {
  ?>
    <h1 id="tit">EDITAR REGISTRO</h1>
    <fieldset id="feel">
    <form method="post" action="procesa_edita_tratamientoM.php">
      <font id="letras">Id Tratamiento:</font>
      <input type="text" name="tratamiento" value="<?php echo $reg['id_tratamiento']; ?>" size="10" readonly="true"/><br />
      <font id="letras">Tipo de Servicio:</font>
      <?php
      $conexion=mysqli_connect("localhost","root") or die("Problemas de conexion");
      mysqli_select_db($conexion,"dentaltorreon") or die ("Problemas de conexion de la base de datos");
      $consulta="select * from tipodeservicio";
      $res=mysqli_query($conexion,$consulta);
      echo "<select name='servicio'>";
      while($ver=mysqli_fetch_array($res))
      {
    echo "<option value='".$ver['id_TipoDeServicio']."'>".$ver['nombre_servicio']."</option>";
    }
    echo "</select><br/>";
      
      ?>
      <font id="letras">Nombre del Tratamiento:</font>
      <input type="text" name="nombre" value="<?php echo $reg['nombre_tratamiento']; ?>" size="30" maxlength="30"/><br />
      <font id="letras">Comentarios:</font>
      <input type="text" name="comentarios" value="<?php echo $reg['comentarios']; ?>" size="30" maxlength="12"/><br />
      <br /><br />
      <input type="submit" value="Editar"/>
    </form></fieldset>
    
  <?php
    }      
    else
    {
	  echo "No existe Medico con ese ID.";
      header("refresh: 2; url = administra_tratamientoM.php");
	}
    mysqli_close($conex);

  ?>
  <br />
<img src="img/dientelimpio.png"/><br />
<a href="administra_tratamientoM.php">Regresar</a></center>
  <br />
  <style>
body{
    background: url('img/log1.JPG');
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
#letras{
    color: black;
}
#feel{
     width: 425px;
    height: 200px;
    background: #88C4FF;
}
</style>
</body>
</html>