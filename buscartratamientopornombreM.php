<?php
session_start();
if(isset($_SESSION['usuario']))
{
echo "<p align='right'>Usuario: ".$_SESSION['usuario']."</br><a href='logoutmedicos.php'>Cerrar Sesion</a></p>";
}
else
{
echo "<p align='right'><a href='login.php'>Login</a></p>";
}
?>
<html>
    <head>
        <title>Buscar Tratamiento</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body><center>
        <h3 id="tit">Buscar Tratamiento</h3>
        <fieldset id="feel">
            <form method="post" action="">
                <font id="letras">Elige el Tratamiento:</font>
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
                <input type="submit" value="Buscar" size="5" />
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
            echo "<table border='1' bgcolor='silver'><center>";
                echo "<tr><td>Nombre de Tratamiento</td><td>Nombre del Servicio</td><td>Comentarios</td></tr>";
                
                echo "<font color='white'><td> ".$reg['nombre_tratamiento']."</font></td>";
                echo "<font color='white'><td> ".$reg['nombre_servicio']."</font></td>";
                echo "<font color='white'> <td>".$reg['comentarios']."</font></td></tr>";
            echo "</table></center>";
            }
            else
            {
            echo "<font color='white'>No se encontro Tratamiento con ese Numero</font>";
            }
            mysqli_close($dental);
            
            }
            ?>
            </center>
            <br />
            <center><img src="img/dientelimpio.png"/><br />
            <a href="buscarM.php">Regresar</a></center>
            
        </body>
    </html>