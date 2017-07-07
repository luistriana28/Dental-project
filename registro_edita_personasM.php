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
    <title>Modificacion de Pacientes</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/query/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <center>
    <?php
    $conex=mysqli_connect("localhost","root","","dentaltorreon") or
    die("Problemas con la conexión a la base de datos");
      
    $regi=mysqli_query($conex,"select * from persona where id_persona=$_GET[persona]") or
    die(mysqli_error($conex));
      
    if ($reg=mysqli_fetch_array($regi))
    {
    ?>
    <h1 id="tit">EDITAR PACIENTES</h1>
    <fieldset id="feel">
      <form method="post" action="procesa_edita_personasM.php">
        <font id="letras">Id Paciente:</font>
        <input type="text" name="id_persona" value="<?php echo $reg['id_persona']; ?>" size="10" readonly="true"/><br />
        <font id="letras">Nombre:</font>
        <input type="text" name="nombre" value="<?php echo $reg['nombre']; ?>" size="30"/><br />
        <font id="letras">Apellido Paterno:</font>
        <input type="text" name="apellidoP" value="<?php echo $reg['apellidoP']; ?>" size="30"/><br />
        <font id="letras">Apellido Materno:</font>
        <input type="text" name="apellidoM" value="<?php echo $reg['apellidoM']; ?>" size="30"/><br />
        <font id="letras">Direccion:</font>
        <input type="text" name="direccion" value="<?php echo $reg['direccion']; ?>" size="30"/><br />
        <font id="letras">Telefono:</font>
        <input type="text" name="telefono" value="<?php echo $reg['telefono']; ?>"/><br />
        <font id="letras">Edad:</font>
        <input type="text" name="edad" value="<?php echo $reg['edad']; ?>"/><br />
        <br /><br />
        <input type="submit" value="Editar"/>
      </form></fieldset>
      
      <?php
      }
      else
      {
        echo "No existe Paciente con ese ID.";
      header("refresh: 2; url = administra_personasM.php");
        }
      mysqli_close($conex);
      ?>
      <br />
      <img src="img/dientelimpio.png"/><br />
      <a href="administra_personasM.php">Regresar</a> </center>
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
      height: 250px;
      background: #88C4FF;
      }
      </style>
    </body>
  </html>