<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Modifica Cita</title>
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
                        <li class="active"><a href="EditarM.php">Inicio</a></li>
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
    </body>
  </html>