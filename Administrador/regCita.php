<?php
session_start();
if(isset($_SESSION['user']))
{
echo "<p align='right'><a href='index.php'>Cerrar Sesion</a></p>";
}
else
{
echo "<p align='right'><a href='loginmedicos.php'>Login</a></p>";
}
?>
<html>
    <head>
        <title>Alta Cita</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilopagina.css">
    </head>
    <body>
        <center><h1 id="tit">Alta Cita</h1>
        <fieldset id="feel">
            <form method="post" action="verificaaltacitas.php">
                <font id="letras"><strong>Cita AAAA-MM-DD: </font><input name="fecha" type="text" maxlength="12" /><br />
                <font id="letras">Nombre de Paciente:</font>
                <?php
                $conexion=mysqli_connect("localhost","root") or die("Problemas de conexion");
                mysqli_select_db($conexion,"dentaltorreon") or die ("Problemas de conexion de la base de datos");
                $consulta="select * from persona";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='persona'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver[id_persona]."'>".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
                    }
                echo "</select><br/>";
                ?>
                <font id="letras">Nombre de Medico: </font>
                <?php
                $conexion=mysqli_connect("localhost","root")
                or die("Problemas de conexion");
                mysqli_select_db($conexion,"dentaltorreon")
                or die ("Problemas de conexion de la base de datos");
                $consulta="select * from medico";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='medico'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver[id_medico]."'>".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
                    }
                echo "</select><br/>";
                ?>
                <font id="letras">Tipo de Servicio: </strong></font>
                <?php
                $conexion=mysqli_connect("localhost","root") or die("Problemas de conexion");
                mysqli_select_db($conexion,"dentaltorreon") or die ("Problemas de conexion de la base de datos");
                $consulta="select * from tipodeservicio";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='servicio'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver[id_TipoDeServicio]."'>".$ver['nombre_servicio']."</option>";
                    }
                echo "</select><br/>";
                ?>
                 <br />
             <br />
                <input type="submit" value="Registrar" id="input"/ class="btn btn-info btn-lg">
            </form></fieldset>
            <br />
             <br />
              <br />
             <br />
            <img src="img/dientelimpio.png"/><br />
            <a href="registrar.php">Regresar</a></center>
            
        </body>
    </html>