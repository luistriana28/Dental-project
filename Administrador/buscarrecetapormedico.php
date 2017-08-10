<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilopagina.css">
    </head>
    <body>
        <nav class="navbar navbar-default fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dental Torreon</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="Buscar.php">Inicio</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(isset($_SESSION['user']))
                        {
                        echo "<li><a href='../PHP/logout.php'><span class='glyphicon glyphicon-user'> </span>".$_SESSION['user'][0].":  Cerrar Sesion</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <center>
        <h3 id="tit">Buscar Receta Por Medico</h3>
        <fieldset id="feel"><form method="post">
            <font id="letras"> <strong>Seleccione al Medico: </strong></font>
            <?php
            $conexion=mysqli_connect("localhost","root")
            or die("Problemas de conexion");
            mysqli_select_db($conexion,"dentaltorreon")
            or die ("Problemas de conexion de la base de datos");
            $consulta="select * from medico";
            $res=mysqli_query($conexion,$consulta);
            echo "<select name='apellido'>";
                while($ver=mysqli_fetch_array($res))
                {
                echo "<option value='".$ver[id_medico]."'>".$ver['nombre']." ".$ver['apellidoP']."</option>";
                }
            echo "</select><br/><br/>";
            ?>
            <input  type="submit" value="Buscar"  class="btn btn-info btn-lg" />
        </form></fieldset></center>
        <center>
        <?php
        if(isset($_POST['apellido']))
        {
        $conexion=mysqli_connect("localhost","root")
        or die("Problemas de conexion");
        mysqli_select_db($conexion,"dentaltorreon")
        or die ("Problemas de conexion de la base de datos");
        $busca=mysqli_query($conexion,"select receta.id_Receta,receta.fecha,persona.id_persona,persona.nombre,persona.apellidoP,
        persona.apellidoM,persona.direccion,persona.telefono,persona.edad from receta inner join persona on receta.id_persona=persona.id_persona
        where id_medico='$_POST[apellido]'");
        $total=mysqli_num_rows($busca);
        if($total==0)
        {
        echo "<font color='white'>No hay Recetas expedidas por Medico</font><br/>";
        }
        else
        {
        echo "<table border='1' bgcolor='silver'>";
            echo "<tr><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Direccion</td><td>Telefono</td>
            <td>Edad</td><td>Fecha</td></tr>";
            while($reg=mysqli_fetch_array($busca))
            {
            echo "<tr><td>".$reg['nombre']."</td><td>".$reg['apellidoP']."</td><td>".$reg['apellidoM']."</td>
            <td>".$reg['direccion']."</td><td>".$reg['telefono']."</td><td>".$reg['edad']."</td><td>".$reg['fecha']."</td>";
            $id=$reg['nombre'];
            $npaciente=mysqli_query($conexion,"select * from receta where id_medico='$id'");
            $row=mysqli_fetch_array($npaciente);
        echo $row['nombre']."</td></tr>";
        }
    echo "</table>";
    mysqli_close($conexion);
    }
    }
    ?>
    </center>
</body>
</html>