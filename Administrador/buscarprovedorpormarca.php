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
        <h3 id="tit">Buscar Proveedor por Marcas</h3>
        <fieldset id="feel">
            <form method="post">
                <font id="letras"> <strong>Seleccione la Marca:</strong></font>
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
                <input  type="submit" value="Buscar" class="btn btn-info btn-lg"/>
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
    </body>
</html>