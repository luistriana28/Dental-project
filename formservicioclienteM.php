<?php
session_start();
if(isset($_SESSION['usuario']))
{
echo "<p align='right'><a href='logoutmedicos.php'>Cerrar Sesion</a></p>";
}
else
{
echo "<p align='right'><a href='login.php'>Login</a></p>";
}
?>
<html>
    <head>
        <title>Alta Servicio Cliente</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <center><h1 id="tit">Alta Servicio al Cliente</h1>
        <fieldset id="feel">
            <form method="post" action="verificaaltaservicioclienteM.php">
                <font id="letras">Seleccione al Paciente:</font>
                <?php
                $conexion=mysqli_connect("localhost","root")
                or die("Problemas de conexion");
                mysqli_select_db($conexion,"dentaltorreon")
                or die ("Problemas de conexion de la base de datos");
                $consulta="select * from persona";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='pacientes'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver[id_persona]."'>".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
                    }
                echo "</select><br/>";
                ?>
                <br />
                <font id="letras">Seleccione al Medico:</font>
                <?php
                $conexion=mysqli_connect("localhost","root")
                or die("Problemas de conexion");
                mysqli_select_db($conexion,"dentaltorreon")
                or die ("Problemas de conexion de la base de datos");
                $consulta="select * from medico";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='medicos'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver[id_medico]."'>".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
                    }
                echo "</select><br/>";
                ?>
                <br />
                <font id="letras">Seleccione el Tipo de Servicio:</font>
                <?php
                $conexion=mysqli_connect("localhost","root")
                or die("Problemas de conexion");
                mysqli_select_db($conexion,"dentaltorreon")
                or die ("Problemas de conexion de la base de datos");
                $consulta="select * from tipodeservicio";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='servicios'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver[id_TipoDeServicio]."'>".$ver['nombre_servicio']."</option>";
                    }
                echo "</select><br/><br/>";
                ?>
                <input type="submit" value="Guardar" id="input" />
            </form></fieldset>
            <br />
            <img src="img/dientelimpio.png"/><br />
            <a href="servicioM.php">Regresar</a></center>
            <style>
            body{
            background-image:url('img/log1.JPG');
            
            }
            #letras
            {
            color: black;
            font-family: Baskerrille Old Face;
            font-size: 20px;
            }
            #input[type=submit]:hover {
            cursor: pointer;
            background: #000040;
            color: white;
            }
            #feel{
            width: 425px;
            height: 180px;
            background: #88C4FF;
            }
            #tit{
            color: white;
            font-family: Baskerrille Old Face;
            }
            </style>
        </body>
    </html>