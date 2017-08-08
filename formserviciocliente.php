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
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <center><h1 id="tit">Alta Servicio al Cliente</h1>
        <fieldset id="feel">
            <form method="post" action="verificaaltaserviciocliente.php">
                <font id="letras"> <strong>Seleccione al Paciente: </strong></font>
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
                <font id="letras"> <strong>Seleccione al Medico: </strong></font>
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
                <font id="letras"> <strong>Seleccione el Tipo de Servicio: </strong></font>
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
                <input type="submit" value="Guardar" id="input" class="btn btn-info btn-lg" />
            </form></fieldset>
            <br />
             <br />
              <br />
            <img src="img/dientelimpio.png"/><br />
            <a href="servicio.php">Regresar</a></center>
            
        </body>
    </html>