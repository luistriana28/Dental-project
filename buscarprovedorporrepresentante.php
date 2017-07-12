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
        <title>Buscar Proveedor</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        
        <center>
        <h3 id="tit">Buscar Proveedor por Representante</h3>
        <fieldset id="feel"><form method="post">
            <font id="letras">Seleccione el Medico:</font>
            <?php
            $conexion=mysqli_connect("localhost","root")
            or die("Problemas de conexion");
            mysqli_select_db($conexion,"dentaltorreon")
            or die ("Problemas de conexion de la base de datos");
            $consulta="select distinct representante from provedor";
            $res=mysqli_query($conexion,$consulta);
            echo "<select name='repre'>";
                while($ver=mysqli_fetch_array($res))
                {
                echo "<option value='".$ver['representante']."'>".$ver['representante']."</option>";
                }
            echo "</select><br/><br/>";
            ?>
            <input  type="submit" value="Buscar" id="input"/>
        </form></fieldset></center>
        <br />
        <?php
        if(isset($_POST['repre']))
        {
        $conexion=mysqli_connect("localhost","root")
        or die("Problemas de conexion");
        mysqli_select_db($conexion,"dentaltorreon")
        or die ("Problemas de conexion de la base de datos");
        $busca=mysqli_query($conexion,"select * from provedor where representante='$_POST[repre]'");
        $total=mysqli_num_rows($busca);
        if($total==0)
        {
        echo "No hay Proveedores registrados con ese Representante<br/>";
        }
        else
        {
        echo "<center><table border='1' bgcolor='silver'>";
            echo "<tr><td>Mercancia</td><td>Direccion</td><td>Telefono</td><td>Fecha</td><td>Marca</td>
            <td>Representante de Proveedor</td></tr>";
            while($reg=mysqli_fetch_array($busca))
            {
            echo "<tr><td>".$reg['mercancia']."</td><td>".$reg['direccion']."</td><td>".$reg['telefono']."</td>
            <td>".$reg['fecha']."</td><td>".$reg['marca']."</td><td>".$reg['representante']."</td></td>";
            $id=$reg['representante'];
            $npaciente=mysqli_query($conexion,"select representante from provedor where id_provedor='$id'");
            $row=mysqli_fetch_array($npaciente);
        echo $row['representante']."</td></tr>";
        
        
        
        }
    echo "</table></center>";
    mysqli_close($conexion);
    }
    }
    ?>
    <center><img src="img/dientelimpio.png"/><br />
    <a href="buscar.php">Regresar</a></center>
</body>
</html>