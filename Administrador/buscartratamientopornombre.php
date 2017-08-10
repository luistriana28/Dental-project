<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Buscar Tratamiento</title>
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
                        <li class="active"><a href="inicioAdministrador.php">Inicio</a></li>
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
        <h3 id="tit">Buscar Tratamiento</h3>
        <fieldset id="feel">
            <form method="post" action="">
                <font id="letras"> <strong>Elige el Tratamiento:</font>
                <?php
                $conexion=mysqli_connect("localhost","root","","dentaltorreon")or die("Problemas de conexion");
                $consulta="select * from tratamiento";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='tratamiento'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver[id_tratamiento]."'>".$ver['nombre_tratamiento']."</option>";
                    }
                echo "</select><br/><br/>";
                ?>
                <br />
                <br />
                <input type="submit" value="Buscar" size="5"  class="btn btn-info btn-lg" />
            </form></fieldset></center>
            <br /><br />
            <center>
            <?php
            if (isset($_POST['tratamiento']))
            {
            $dental=mysqli_connect("localhost","root") or die ("Problemas de Conexion");
            mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la BD");
            $registro=mysqli_query($dental,"select * from tratamiento inner join tipodeservicio on tratamiento.id_TipoDeServicio=tipodeservicio.id_TipoDeServicio
            where id_tratamiento='$_POST[tratamiento]'") or die ("Problemas en la consulta".mysqli_error());
            if ($reg=mysqli_fetch_array($registro))
            {
            echo "<font color='white'>Nombre de Tratamiento: ".$reg['nombre_tratamiento']."</font></br>";
            echo "<font color='white'>Nombre del Servicio: ".$reg['nombre_servicio']."</font></br>";
            echo "<font color='white'>Comentarios: ".$reg['comentarios']."</font></br>";
            }
            else
            {
            echo "<font color='white'>No se encontro Tratamiento con ese Numero</font>";
            }
            mysqli_close($dental);
            
            }
            ?>
            </center>
        </body>
    </html>