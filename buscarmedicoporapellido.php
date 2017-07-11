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
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
          <link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <center><h3 id="tit">Buscar Medico por Apellido</h3>
        <fieldset id="feel">
            <form method="post">
                <font id="letras">Seleccione el Apellido Paterno:</font><br />
                <?php
                $conexion=mysqli_connect("localhost","root")
                or die("Problemas de conexion");
                mysqli_select_db($conexion,"dentaltorreon")
                or die ("Problemas de conexion de la base de datos");
                $consulta="select distinct apellidoP from medico";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='apellido'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver['apellidoP']."'>".$ver['apellidoP']."</option>";
                    }
                echo "</select><br/><br/>";
                ?>
                <input  type="submit" value="Buscar" id="input"/>
            </form></fieldset></center>
            <br />
            <br />
            <center>
            <?php
            if(isset($_POST['apellido']))
            {
            $conexion=mysqli_connect("localhost","root")
            or die("Problemas de conexion");
            mysqli_select_db($conexion,"dentaltorreon")
            or die ("Problemas de conexion de la base de datos");
            $busca=mysqli_query($conexion,"select * from medico where apellidoP='$_POST[apellido]'");
            $total=mysqli_num_rows($busca);
            if($total==0)
            {
            echo "<font color='white'>No hay Medico registrados con ese apellido</font><br/>";
            }
            else
            {
            echo "<table border='1' bgcolor='silver'>";
                echo "<tr><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Telefono</td><td>Especialidad</td>
                <td>Cedula</td></tr>";
                while($reg=mysqli_fetch_array($busca))
                {
                echo "<tr><td>".$reg['nombre']."</td><td>".$reg['apellidoP']."</td><td>".$reg['apellidoM']."</td>
                <td>".$reg['telefono']."</td><td>".$reg['especialidad']."</td><td>".$reg['cedula']."</td>";
                $id=$reg['apellidoP'];
                $nmedico=mysqli_query($conexion,"select nombre from medico where id_medico='$id'");
                $row=mysqli_fetch_array($nmedico);
            echo $row['nombre']."</td></tr>";
            
            
            
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