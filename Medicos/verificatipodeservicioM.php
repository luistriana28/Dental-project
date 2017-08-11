<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Alta Tipo de Servicio</title>
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
$nombre_servicio=$_POST['nombre'];
$conexion=mysqli_connect("localhost","root")or die("Problemas de conexion");
mysqli_select_db($conexion,"dentaltorreon") or die("Problemas de conexion on la base de datos");
if ($nombre_servicio==null)
    {
        echo "<font color='red'>Hay campos vacios verifica porfavor</font>";
    }
    else
    {
       
        $query="insert into tipodeservicio (nombre_servicio) values('$_POST[nombre]')";
        mysqli_query($conexion,$query) or die("Problemas con el Query");
        echo "<font color='green'>Tipo De Servicio Registrado</font>";
        }
        mysqli_close($conexion);
?>
</body>
</html>