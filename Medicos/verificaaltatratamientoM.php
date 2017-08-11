<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Alta Tratamiento</title>
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
$nombre_tratamiento=$_POST['nombre_tratamiento'];
$comentarios=$_POST['comentarios'];
$conexion=mysqli_connect("localhost","root","","dentaltorreon") or die ("Problemas con la conexion");
if($nombre_tratamiento==null||$cometarios==null)
{
    echo "<font color='red'>Hay campos vacios verifica porfavor</font>";
}
else
{
 
mysqli_query($conexion,"insert into tratamiento (id_TipoDeServicio,nombre_tratamiento,comentarios) 
values ('$_POST[servicio]','$_POST[nombre_tratamiento]','$_POST[comentarios]')") or die ("Problemas en la Consulta".mysqli_error());   

echo "<font color='green'>Tratamiento exitosamente registrado</font>";
}
mysqli_close($conexion);
?>
</body>
</html>