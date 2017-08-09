<?php
session_start();
if(isset($_SESSION['user']))
?>
<html>
    <head>
        <title>Alta Expediente</title>
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
                        <li class="active"><a href="Registrar.php">Inicio</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(isset($_SESSION['user']))
                        {
                        echo "<li><a href='../index.php'><span class='glyphicon glyphicon-user'></span> Cerrar Sesion</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <center><h1 id="tit"> <strong>Alta Expediente</h1></center>
        <center>
        <fieldset id="feel">
            <form method="post" action="verificaAltaExpediente.php">
                <font id="letras">Nombre  de Paciente:
                <?php
                $conexion=mysqli_connect("localhost","root","","dentaltorreon")or die("Problemas de conexion");
                $consulta="select * from persona";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='paciente'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver['id_persona']."'>".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
                    }
                echo "</select>";
                ?>
                <br /><br />
                <font id="letras">Fecha de Ingreso (AAAA-MM-DD):</font> <input type="text" name="ingreso" size="10" maxlength="10" /><br /><br />
                <font id="letras">Comentarios:</strong></font><br /><textarea name="comentarios"  cols="26" rows="5" maxlength="40">
                </textarea>
                <br />
                <input type="submit" value="Registrar" id="input" class="btn btn-info btn-lg"/>
            </form></fieldset></center>
        </html>