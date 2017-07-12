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
        <h3 id="tit">Buscar Proveedor por Marcas</h3>
        <fieldset id="feel">
            <form method="post">
                <font id="letras">Seleccione la Marca:</font>
                <?php
                $conexion=mysqli_connect("localhost","root")
                or die("Problemas de conexion");
                mysqli_select_db($conexion,"dentaltorreon")
                or die ("Problemas de conexion de la base de datos");
                $consulta="select * from provedor";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='marca'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver['id_Provedor']."'>".$ver['marca']."</option>";
                    }
                echo "</select><br/><br/>";
                ?>
                <input  type="submit" value="Buscar"/>
            </form></fieldset></center>
            <br />
            <br />
            <center>
            <?php
            if(isset($_POST['marca']))
            {
            $conexion=mysqli_connect("localhost","root")
            or die("Problemas de conexion");
            mysqli_select_db($conexion,"dentaltorreon")
            or die ("Problemas de conexion de la base de datos");
            $busca=mysqli_query($conexion,"select provedor.*,medico.* from provedor inner join medico on provedor.id_medico=medico.id_medico
            where id_Provedor='$_POST[marca]'");
            $total=mysqli_num_rows($busca);
            if($total==0)
            {
            echo "<font color='white'>No hay Proveedores registrados para esa Marca<br/>";
            }
            else
            {
            echo "<table border='1' bgcolor='silver'>";
                echo "<tr><td>Representante de Proveedor</td><td>Direccion</td><td>Telefono</td><td>Mercancia</td><td>Fecha</td>
                <td>Medico Solicitante</td></tr>";
                while($reg=mysqli_fetch_array($busca))
                {
                echo "<tr><td>".$reg['representante']."</td><td>".$reg['direccion']."</td><td>".$reg['telefono']."</td>
                <td>".$reg['mercancia']."</td><td>".$reg['fecha']."</td><td>".$reg['nombre']." ".$reg['apellidoP']."</td>";
                $id=$reg['marca'];
                $npaciente=mysqli_query($conexion,"select marca from provedor where marca='$id'");
                $row=mysqli_fetch_array($npaciente);
            echo $row['marca']."</td></tr>";
            
            
            
            }
        echo "</table>";
        mysqli_close($conexion);
        }
        }
        ?>
        </center>
        <br />
        <center><img src="img/dientelimpio.png"/><br />
        <a href="buscar.php">Regresar</a></center>
        
    </body>
</html>