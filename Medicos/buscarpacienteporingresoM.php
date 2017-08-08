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
    <head><title>Buscar Paciente</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
          <link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <center>
        <h1 id="tit">Buscar Paciente por Fecha de Ingreso</h1>
        <fieldset id="feel"><form method="post">
            <font id="letras">Fecha de Ingreso:</font><br />
            <?php
            $conexion=mysqli_connect("localhost","root")
            or die("Problemas de conexion");
            mysqli_select_db($conexion,"dentaltorreon")
            or die ("Problemas de conexion de la base de datos");
            $consulta="select distinct ingreso from expediente";
            $res=mysqli_query($conexion,$consulta);
            echo "<select name='ingreso'>";
                while($ver=mysqli_fetch_array($res))
                {
                echo "<option value='".$ver['ingreso']."'>".$ver['ingreso']."</option>";
                }
            echo "</select><br/><br/>";
            ?>
            <input type="submit" value="Buscar Expediente" id="input"/>
        </form></fieldset></center>
        <br />
        <br />
        <center>
        <?php
        if(isset($_POST['ingreso']))
        {
        $conexion=mysqli_connect("localhost","root")
        or die("Problemas de conexion");
        mysqli_select_db($conexion,"dentaltorreon")
        or die ("Problemas de conexion de la base de datos");
        $busca=mysqli_query($conexion,"select expediente.id_Expediente,expediente.id_persona,expediente.ingreso,expediente.comentarios,persona.nombre,
        persona.apellidoP,persona.telefono from expediente inner join persona on expediente.id_persona=persona.id_persona
        where expediente.ingreso='$_POST[ingreso]'");
        $total=mysqli_num_rows($busca);
        if($total==0)
        {
        echo "<font color='white'>No hay Expediente Registrado en esa Fecha</font><br/>";
        }
        else
        {
        echo "<table border='1' bgcolor='silver'>";
            echo "<tr><td>Nombre</td><td>Apellido Paterno</td><td>Telefono</td><td>Fecha de Ingreso</td><td>Comentarios</td></tr>";
            while($reg=mysqli_fetch_array($busca))
            {
            echo "<tr><<td>".$reg['nombre']."</td><td>".$reg['apellidoP']."</td><td>".$reg['telefono']."</td>
            <td>".$reg['ingreso']."</td><td>".$reg['comentarios']."</td>";
            $id=$reg['ingreso'];
            $npaciente=mysqli_query($conexion,"select ingreso from expediente where id_Expediente='$id'");
            $row=mysqli_fetch_array($npaciente);
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
    <a href="buscarM.php">Regresar</a></center>
    
</body>
</html>