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
        <center><h1 id="tit" >Alta Paciente</h1>
        <fieldset id="feel">
            <form method="post" action="verificaaltapacientesM.php">
                <font id="letras">Nombre:</font> <input type="text" name="nombre" size="20"/><br />
                <font id="letras">Apellido Paterno:</font> <input type="text" name="apellidoP" size="20" maxlength="30"/><br />
                <font id="letras">Apellido Materno:</font> <input type="text" name="apellidoM" size="20"maxlength="30"/><br />
                <font id="letras">Direccion:</font> <input type="text" name="direccion" size="20" maxlength="30"/><br />
                <font id="letras">Edad:</font> <input type="text" name="edad" size="20" maxlength="30"/><br />
                <font id="letras">Telefono:</font><input type="text" name="telefono" size="20" maxlength="10"/><br />
                <input type="submit" value="Registrar" id="input" />
            </form>
        </fieldset></center>
    </body>
</html>