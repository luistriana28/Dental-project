<?php
session_start();
?>
<html>
    <head>
        <title>Alta Proveedor</title>
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
        <center><h1 id="tit">Alta Proveedor</h1><br />
        <fieldset id="feel">
            <form method="post" action="verificaAaltaProveedor.php" >
                <font id="letras"> <strong>Nombre: </strong></font> <input type="text" name="representante" size="20" maxlength="20" /><br />
                <font id="letras"> <strong>Direccion: </strong></font><input type="text" name="direccion" size="20" maxlength="30" /><br />
                <font id="letras"> <strong>Telefono: </strong></font><input type="text" name="telefono" size="20" maxlength="10" /><br />
                <font id="letras"> <strong>Fecha (AAAA-MM-DD): </strong></font> <input type="text" name="fecha" size="20" maxlength="10" /><br />
                <font id="letras">  <strong>Marca: </strong> </font><input type="text" name="marca" size="20" maxlength="15" /><br />
                <font id="letras"> <strong>Mercancia: </strong></font> <input type="text" name="mercancia" size="20" maxlength="30" /><br />
                <font id="letras">  <strong>Medico: </strong>
                <?php
                $conexion=mysqli_connect("localhost","root","","dentaltorreon")or die("Problemas de conexion");
                $consulta="select * from medico";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='medico'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver[id_medico]."'>".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
                    }
                echo "</select>";
                ?>
                <br />
                 <br />
                <input type="submit" value="Registrar" id="input" class="btn btn-info btn-lg" />
            </form></fieldset></center>
        </body>
    </html>