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
      
    $regi=mysqli_query($conex,"select * from cita where id_Cita=$_GET[cita]")
    or die(mysqli_error($conex));
      
    if ($reg=mysqli_fetch_array($regi))
    {
    ?>
    <h1 id="tit">EDITAR REGISTRO</h1>
    <fieldset id="feel">
      <form method="post" action="procesa_edita_citaM.php">
        <font id="letras">No. de Cita:</font>
        <input type="text" name="cita" value="<?php echo $reg['id_Cita']; ?>" size="10" readonly="true"/><br />
        <font id="letras">Fecha de Cita (AAAA-MM-DD):</font>
        <input type="text" name="fecha" value="<?php echo $reg['fecha']; ?>" size="10" maxlength="10"/><br />
        <font id="letras">Paciente:</font>
        <input type="text" name="paciente" value="<?php echo $reg['id_persona']; ?>" size="3" readonly="true"/><br />
        <font id="letras">Medico:</font>
        
        <?php
        $conexion=mysqli_connect("localhost","root") or die("Problemas de conexion");
        mysqli_select_db($conexion,"dentaltorreon") or die ("Problemas de conexion de la base de datos");
        $consulta="select * from medico";
        $res=mysqli_query($conexion,$consulta);
        echo "<select name='medico'>";
          while($ver=mysqli_fetch_array($res))
          {
          echo "<option value='".$ver['id_medico']."'>".$ver['nombre']." ".$ver['apellidoP']."</option>";
          }
        echo "</select><br/>";
        ?>
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
        <input type="submit" value="Editar"/>
      </form>
      <br />
      <img src="img/dientelimpio.png"/><br />
      <a href="administra_cita.php">Regresar</a></center>
      <br />
      
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