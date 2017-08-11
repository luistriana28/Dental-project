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
        <center><h1 id="tit">Alta Tratamiento</h1>
        <fieldset id="feel">
            <form method="post" action="verificaaltatratamientoM.php">
                <font id="letras">Tipo de Servicio:</font>
                <?php
                $conexion=mysqli_connect("localhost","root","","dentaltorreon")or die("Problemas de conexion");
                $consulta="select * from tipodeservicio";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='servicio'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver['id_TipoDeServicio']."'>".$ver['nombre_servicio']."</option>";
                    }
                echo "</select><br/><br/>";
                ?>
                <font id="letras">Nombre de Tratamiento:</font> <input type="text" name="nombre_tratamiento" size="10" maxlength="30" /><br /><br />
                <font id="letras">Comentarios:</font> <textarea name="comentarios" cols="40" rows="5"></textarea><br /><br />
                <input type="submit" value="Registrar" id="input" />
                <br />
                <br />
            </form></fieldset></center>
            </body>
    </html>