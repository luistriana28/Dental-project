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
    <title>Modificacion de Receta</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/query/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="estilopagina.css">
  </head>
  <body>
    <center>
    <?php
    $conex=mysqli_connect("localhost","root","","dentaltorreon") or
    die("Problemas con la conexión a la base de datos");
      
    $regi=mysqli_query($conex,"select * from receta where id_Receta=$_GET[receta] and fecha='$_GET[fecha]'")
    or die(mysqli_error($conex));
      
    if ($reg=mysqli_fetch_array($regi))
    {
    ?>
    <h1 id="tit">EDITAR REGISTRO</h1>
    <fieldset id="feel">
      <form method="post" action="procesa_edita_receta.php">
        <font id="letras">No. de Receta:</font>
        <input type="text" name="receta" value="<?php echo $reg['id_Receta']; ?>" size="10" readonly="true"/><br />
        <font id="letras">Fecha Expedicion de Receta (AAAA-MM-DD):</font>
        <input type="text" name="fecha" value="<?php echo $reg['fecha']; ?>" size="10" maxlength="10" readonly="true"/><br />
        <font id="letras">Paciente:</font>
        <input type="text" name="paciente" value="<?php echo $reg['id_persona']; ?>" size="3" readonly="true"/><br />
        <font id="letras">Medico:</font>
        <input type="text" name="medico" value="<?php echo $reg['id_medico']; ?>" size="3" readonly="true"/><br />
        <font id="letras">Nombre de Medicamento:</font>
        <input type="text" name="medicamento" value="<?php echo $reg['nombre_medicamento']; ?>" size="30" maxlength="20"/><br />
        <font id="letras">Observaciones:</font>
        <input type="text" name="observaciones" value="<?php echo $reg['observaciones']; ?>" size="30" maxlength="30"/><br />
        <font id="letras">Dosis:</font>
        <input type="text" name="dosis" value="<?php echo $reg['dosis']; ?>" size="30" maxlength="20"/><br />
        <br /><br />
        <input type="submit" value="Editar"/>
      </form></fieldset>
      
      <?php
      }
      else
      {
        echo "No existe Medico con ese ID.";
      header("refresh: 2; url = administra_receta.php");
        }
      mysqli_close($conex);
      ?>
      <br />
      <img src="img/dientelimpio.png"/><br />
      <a href="administra_receta.php">Regresar</a></center>
      <br />
      
    </body>
  </html>