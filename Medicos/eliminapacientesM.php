<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Elimina Paciente</title>
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
                        <li class="active"><a href="EliminarM.php">Inicio</a></li>
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
    </body>
</html>