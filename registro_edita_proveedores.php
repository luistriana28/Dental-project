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
    <title>Modificacion de Proveedores</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/query/jquery.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <center>
    <?php
    $conex=mysqli_connect("localhost","root","","dentaltorreon") or
    die("Problemas con la conexión a la base de datos");
      
    $regi=mysqli_query($conex,"select * from provedor  where id_Provedor=$_GET[provedor]") or
    die(mysqli_error($conex));
      
    if ($reg=mysqli_fetch_array($regi))
    {
    ?>
    <h1 id="tit">EDITAR REGISTRO</h1>
    <fieldset id="feel">
      <form method="post" action="procesa_edita_proveedores.php">
        
        <font id="letras">Id Proveedor:</font>
        <input type="text" name="provedor" value="<?php echo $reg['id_Provedor']; ?>" size="10" readonly="true"/><br />
        <font id="letras">Representante:</font>
        <input type="text" name="representante" value="<?php echo $reg['representante']; ?>" size="30" maxlength="30"/><br />
        <font id="letras">Direccion:</font>
        <input type="text" name="direccion" value="<?php echo $reg['direccion']; ?>" size="30" maxlength="30"/><br />
        <font id="letras">Telefono:</font>
        <input type="text" name="telefono" value="<?php echo $reg['telefono']; ?>" size="30" maxlength="12"/><br />
        <font id="letras">Marca:</font>
        <input type="text" name="marca" value="<?php echo $reg['marca']; ?>" size="30" maxlength="30"/><br />
        <font id="letras">Mercancia:</font>
        <input type="text" name="mercancia" value="<?php echo $reg['mercancia']; ?>" maxlength="30"/><br />
        <br /><br />
        <input type="submit" value="Editar"/>
      </form></fieldset>
      
      <?php
      }
      else
      {
        echo "No existe Medico con ese ID.";
      header("refresh: 2; url = administra_proveedores.php");
        }
      mysqli_close($conex);
      ?>
      <br />
      <img src="img/dientelimpio.png"/><br />
      <a href="administra_proveedores.php">Regresar</a>   </center>
      <br />
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
      height: 250px;
      background: #88C4FF;
      }
      </style>
    </body>
  </html>