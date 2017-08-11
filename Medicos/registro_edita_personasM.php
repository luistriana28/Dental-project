<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Modifica Paciente</title>
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
      ?></center>
    </body>
  </html>