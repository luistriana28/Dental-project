<?php
session_start();
if(isset($_SESSION['usuario']))
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
        <title>Alta Receta</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <center><h1 id="tit">Alta Receta</h1>
        <fieldset id="feel">
            <form method="post" action="verificaaltareceta.php">
                <font id="letras"> <strong>Nombre de Paciente:</font>
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
                <br />
                <font id="letras">Nombre del Medico: </font>
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
                <br />
                <font id="letras">Nombre del Medicamento:</font> <input type="text" name="nombre_medicamento" size="30" maxlength="30" /><br />
                <font id="letras">Fecha (AAAA-MM-DD):</font> <input type="text" name="fecha" size="10" maxlength="10" /><br />
                <font id="letras">Dosis del Medicamento:</font> <input type="text" name="dosis" size="30" maxlength="50" /><br />
                <font id="letras">Observaciones:</strong></font> <textarea name="observaciones" cols="30" rows="5"></textarea><br />
                <br />
                <input type="submit" value="Registrar" id="input" class="btn btn-info btn-lg"/>
            </form></fieldset>
            <br />  <br />  <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br /> <br />
            <img src="img/dientelimpio.png"/><br />
            <a href="Registrar.php">Regresar</a></center>
            
        </body>
    </html>