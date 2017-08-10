<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Buscar Medico</title>
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
        <center><h3 id="tit">Buscar Medico por Especialidad</h3>
        <fieldset id="feel">
            <form method="post">
                <font id="letras"> <strong>Seleccione la Especialidad del Medico:</strong></font><br />
                <?php
                $conexion=mysqli_connect("localhost","root")
                or die("Problemas de conexion");
                mysqli_select_db($conexion,"dentaltorreon")
                or die ("Problemas de conexion de la base de datos");
                $consulta="select distinct especialidad from medico";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='espe'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver['especialidad']."'>".$ver['especialidad']."</option>";
                    }
                echo "</select><br/><br/>";
                ?>
                <input  type="submit" value="Buscar"/ class="btn btn-info btn-lg">
            </form></fieldset></center>
            <br />
            <br />
            <center>
            <?php
            if(isset($_POST['espe']))
            {
            $conexion=mysqli_connect("localhost","root")
            or die("Problemas de conexion");
            mysqli_select_db($conexion,"dentaltorreon")
            or die ("Problemas de conexion de la base de datos");
            $busca=mysqli_query($conexion,"select * from medico where especialidad='$_POST[espe]'");
            $total=mysqli_num_rows($busca);
            if($total==0)
            {
            echo "<font color='white'>No hay Medicos registrados con esa Especialidad</font><br/>";
            }
            else
            {
            echo "<table border='2'bgcolor='silver'>";
                echo "<tr><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Telefono</td>
                <td>Cedula</td><td>Especialidad</td></tr>";
                while($reg=mysqli_fetch_array($busca))
                {
                echo "<tr><td>".$reg['nombre']."</td><td>".$reg['apellidoP']."</td><td>".$reg['apellidoM']."</td>
                <td>".$reg['telefono']."</td><td>".$reg['cedula']."</td><td>".$reg['especialidad']."</td>";
                $id=$reg['especialidad'];
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
    </body>
</html>