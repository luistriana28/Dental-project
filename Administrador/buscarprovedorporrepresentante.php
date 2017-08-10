<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Buscar Proveedor</title>
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
        <h3 id="tit">Buscar Proveedor por Representante</h3>
        <fieldset id="feel"><form method="post">
            <font id="letras"><strong>Seleccione el Medico:</strong></font>
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
            <input  type="submit" value="Buscar" id="input" class="btn btn-info btn-lg"/>
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
    </center>
</body>
</html>