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
        <title>Buscar Proveedor</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <center><h3 id="tit">Buscar Proveedor por Medico</h3>
        <fieldset id="feel">
            <form method="post">
                <font id="letras"><strong> Seleccione el Medico:</strong></font><br />
                <?php
                $conexion=mysqli_connect("localhost","root")
                or die("Problemas de conexion");
                mysqli_select_db($conexion,"dentaltorreon")
                or die ("Problemas de conexion de la base de datos");
                $consulta="select * from medico";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='medic'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver['id_medico']."'>".$ver['nombre']." ".$ver['apellidoP']."</option>";
                    }
                echo "</select><br/><br/>";
                ?>
                <input  type="submit" value="Buscar" id="input" class="btn btn-info btn-lg"/>
            </form></fieldset></center>
            <br /><br />
            <center>
            <?php
            if(isset($_POST['medic']))
            {
            $conexion=mysqli_connect("localhost","root")
            or die("Problemas de conexion");
            mysqli_select_db($conexion,"dentaltorreon")
            or die ("Problemas de conexion de la base de datos");
            $busca=mysqli_query($conexion,"select provedor.*,medico.* from provedor inner join medico on provedor.id_medico=medico.id_medico
            where provedor.id_medico='$_POST[medic]'");
            $total=mysqli_num_rows($busca);
            if($total==0)
            {
            echo "<font color='white'>No hay Proveedores registrados para Medico</font><br/>";
            }
            else
            {
            echo "<table border='1' bgcolor='silver'>";
                echo "<tr><td>Representante de Proveedor</td><td>Direccion</td><td>Telefono</td><td>Fecha</td><td>Marca</td>
                <td>Mercancia</td><td>Medico Solicitante</td></tr>";
                while($reg=mysqli_fetch_array($busca))
                {
                echo "<tr><td>".$reg['representante']."</td><td>".$reg['direccion']."</td><td>".$reg['telefono']."</td>
                <td>".$reg['fecha']."</td><td>".$reg['marca']."</td><td>".$reg['mercancia']."</td><td>".$reg['nombre']." ".$reg['apellidoP']."</td>";
                $id=$reg['representante'];
                $npaciente=mysqli_query($conexion,"select id_medico from provedor where id_medico='$id'");
                $row=mysqli_fetch_array($npaciente);
            echo $row['representante']."</td></tr>";
            
            
            
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