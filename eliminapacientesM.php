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
        <title>Eliminar Cliente</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <center>
        <h1 id="tit">Eliminar Cliente</h1>
        <fieldset id="feel"><form method="post">
            <font id="letras">Ingrese el codigo del cliente a Eliminar: </font><br />
            <?php
            $conexion=mysqli_connect("localhost","root")
            or die("Problemas de conexion");
            mysqli_select_db($conexion,"dentaltorreon")
            or die ("Problemas de conexion de la base de datos");
            $consulta="select * from persona";
            $res=mysqli_query($conexion,$consulta);
            echo "<select name='codi'>";
                while($ver=mysqli_fetch_array($res))
                {
                echo "<option value='".$ver['id_persona']."'>".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
                }
            echo "</select><br/>";
            ?>
            <br />
            <br />
            <input type="submit" value="Eliminar" id="input"/>
        </form></fieldset>
        <?php
        if (isset($_POST['codi']))
        {
        $dental=mysqli_connect("localhost","root")
        or die ("Problemas de Conexion");
        mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la BD");
        $registro=mysqli_query($dental,"select id_persona,nombre,apellidoP,apellidoM,direccion,telefono,edad
        from persona where id_persona='$_POST[codi]'") or die ("Problemas en la consulta");
        
        if ($reg=mysqli_fetch_array($registro))
        {
        echo "<font color='white'>Codigo: ".$reg['id_persona']."</font></br>";
        echo "<font color='white'>Nombre: ".$reg['nombre']."</font></br>";
        echo "<font color='white'>Apellido Paterno: ".$reg['apellidoP']."</font></br>";
        echo "<font color='white'>Apellido Materno: ".$reg['apellidoM']."</font></br>";
        echo "<font color='white'>Direccion: ".$reg['direccion']."</font></br>";
        echo "<font color='white'>Telefono: ".$reg['telefono']."</font></br>";
        echo "<font color='white'>Edad: ".$reg['edad']."</font></br>";
        
        mysqli_query($dental,"delete from persona where id_persona='$_POST[codi]'")
        or die ("Problemas con el delete");
        echo "<h4><font color='white'>Se elimino el cliente</font></h4>";
        }
        else
        {
        echo "<font color='white'>No existe paciente</font>";
        }
        mysqli_close($dental);
        }
        ?>
        <br />
        <img src="img/dientelimpio.png"/><br />
        <a href="EliminarM.php">Regresar</a></center>
        <br />
        
    </body>
</html>