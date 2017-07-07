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
    <head><title>Buscar Cita por Fecha</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <center>
        <h1 id="tit">Buscar Cita por Fecha</h1>
        <fieldset id="feel"><form method="post">
            <font id="letras">Buscar Cita por Fecha</font>
            <?php
            $conexion=mysqli_connect("localhost","root")
            or die("Problemas de conexion");
            mysqli_select_db($conexion,"dentaltorreon")
            or die ("Problemas de conexion de la base de datos");
            $consulta="select distinct fecha from cita";
            $res=mysqli_query($conexion,$consulta);
            echo "<select name='ingreso'>";
                while($ver=mysqli_fetch_array($res))
                {
                echo "<option value='".$ver['fecha']."'>".$ver['fecha']."</option>";
                }
            echo "</select><br/><br/>";
            ?>
            <input type="submit" value="Buscar Expediente" />
        </form></fieldset></center>
        <center>
        <?php
        if(isset($_POST['ingreso']))
        {
        $conexion=mysqli_connect("localhost","root")
        or die("Problemas de conexion");
        mysqli_select_db($conexion,"dentaltorreon")
        or die ("Problemas de conexion de la base de datos");
        $busca=mysqli_query($conexion,"select cita.id_Cita,cita.id_persona,cita.fecha,persona.nombre,
        persona.apellidoP,persona.apellidoM,persona.telefono,persona.direccion from cita inner join persona on cita.id_persona=persona.id_persona
        where cita.fecha='$_POST[ingreso]'");
        $total=mysqli_num_rows($busca);
        if($total==0)
        {
        echo "<font color='white'>No hay Cita Registrada en esa Fecha</font><br/>";
        }
        else
        {
        echo "<table border='1' bgcolor='silver'>";
            echo "<tr><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Telefono</td><td>Direccion</td>
            <td>Fecha Cita</td></tr>";
            while($reg=mysqli_fetch_array($busca))
            {
            echo "<tr><td>".$reg['nombre']."</td><td>".$reg['apellidoP']."</td><td>".$reg['apellidoM']."</td>
            <td>".$reg['telefono']."</td><td>".$reg['direccion']."</td>
            <td>".$reg['fecha']."</td>";
            $id=$reg['fecha'];
            $npaciente=mysqli_query($conexion,"select fecha from cita where id_Cita='$id'");
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
    <a href="buscarM.php">Regresar</font></a></center>
    <style>
    body{
    background: url('img/log1.jpg');
    
    }
    #letras
    {
    color: black;
    font-family: Baskerrille Old Face;
    font-size: 20px;
    }
    #input[type=submit]:hover {
    cursor: pointer;
    background: #000040;
    color: white;
    }
    #feel{
    width: 425px;
    height: 150px;
    background: #88c4ff;
    }
    #tit{
    color: white;
    font-family: Baskerrille Old Face;
    }
    </style>
</body>
</html>