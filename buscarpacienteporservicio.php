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
        <title>Buscar Paciente</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <center><h3 id="tit">Buscar Pacientes Por Servicio</h3>
        <fieldset id="feel"><form method="post">
            <font id="letras">Seleccione el Servicio:</font><br />
            <?php
            $conexion=mysqli_connect("localhost","root")
            or die("Problemas de conexion");
            mysqli_select_db($conexion,"dentaltorreon")
            or die ("Problemas de conexion de la base de datos");
            $consulta="select * from tipodeservicio";
            $res=mysqli_query($conexion,$consulta);
            echo "<select name='servicio'>";
                while($ver=mysqli_fetch_array($res))
                {
                echo "<option value='".$ver[id_TipoDeServicio]."'>".$ver['nombre_servicio']."</option>";
                }
            echo "</select><br/><br/>";
            ?>
            <input  type="submit" value="Buscar" id="input"/>
        </form></fieldset></center>
        <br /><br />
        <center>
        <?php
        if(isset($_POST['servicio']))
        {
        $conexion=mysqli_connect("localhost","root")
        or die("Problemas de conexion");
        mysqli_select_db($conexion,"dentaltorreon")
        or die ("Problemas de conexion de la base de datos");
        $busca=mysqli_query($conexion,"select id_TipoDeServicio,persona.id_persona,persona.nombre,persona.apellidoP,
        persona.apellidoM,persona.direccion,persona.telefono,persona.edad from servicio inner join persona on servicio.id_persona=persona.id_persona
        where id_TipoDeServicio='$_POST[servicio]'");
        $total=mysqli_num_rows($busca);
        if($total==0)
        {
        echo "<font color='white'>No hay Pacientes registrados en ese Servicio</font><br/>";
        }
        else
        {
        echo "<table border='1' bgcolor='silver'>";
            echo "<tr><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Direccion</td><td>Telefono</td>
            <td>Edad</td></tr>";
            while($reg=mysqli_fetch_array($busca))
            {
            echo "<tr><td>".$reg['nombre']."</td><td>".$reg['apellidoP']."</td><td>".$reg['apellidoM']."</td>
            <td>".$reg['direccion']."</td><td>".$reg['telefono']."</td><td>".$reg['edad']."</td>";
            $id=$reg['nombre'];
            $npaciente=mysqli_query($conexion,"select * from servicio where id_TipoDeServicio='$id'");
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
    <a href="buscar.php">Regresar</a></center>
    <style>
    body{
    background-image:url('img/log1.JPG');
    
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
    height: 120px;
    background: #88C4FF;
    }
    #tit{
    color: white;
    font-family: Baskerrille Old Face;
    }
    </style>
</body>
</html>