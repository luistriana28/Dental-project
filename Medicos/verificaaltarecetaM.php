<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Alta Receta</title>
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
                        <li class="active"><a href="RegistrarM.php">Inicio</a></li>
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
        <?php
        $nombre_medicamento=$_POST['nombre_medicamento'];
        $fecha=$_POST['fecha'];
        $dosis=$_POST['dosis'];
        $observaciones=$_POST['observaciones'];
        $dental=mysqli_connect("localhost","root") or die ("Problemas con la conexion");
        mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la base de datos");
        if($nombre_medicamento==null||$fecha==null||$dosis==null||$observaciones==null)
        {
        echo "<font color='red'>Hay campos vacios verifica porfavor</font>";
        }
        else
        {
        mysqli_query($dental,"insert into receta (id_persona,id_medico,nombre_medicamento,fecha,observaciones,dosis)
        values('$_POST[persona]','$_POST[medico]','$_POST[nombre_medicamento]','$_POST[fecha]','$_POST[observaciones]','$_POST[dosis]')")
        or die ("Problemas en la consulta".mysqli_error());
        echo "<font color='white'>Receta Registrada Exitosamente</font>";
        }
        mysqli_close($dental);
        ?>
        <br />
        <br />
        <a href="formaltarecetaM.php">Regresar</a>
    </body>
</html>