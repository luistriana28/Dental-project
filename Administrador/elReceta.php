<?php
session_start();
?>
<html>
    <head>
        <title>Eliminar Receta</title>
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
                        <li class="active"><a href="Eliminar.php">Inicio</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        if(isset($_SESSION['user']))
                        {
                        echo "<li><a href='../index.php'><span class='glyphicon glyphicon-user'></span> Cerrar Sesion</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <center><h1 id="tit">Eliminar Receta</h1>
        <fieldset id="feel"><form method="post">
            <font id="letras">Ingrese el codigo de la Receta a Eliminar:</font><br />
            <?php
            $conexion=mysqli_connect("localhost","root")
            or die("Problemas de conexion");
            mysqli_select_db($conexion,"dentaltorreon")
            or die ("Problemas de conexion de la base de datos");
            $consulta="select * from receta";
            $res=mysqli_query($conexion,$consulta);
            echo "<select name='codi'>";
                while($ver=mysqli_fetch_array($res))
                {
                echo "<option value='".$ver['id_Receta']."'>".$ver['nombre_medicamento']." ".$ver['fecha']."</option>";
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
        $registro=mysqli_query($dental,"select id_Receta,id_persona,id_medico,nombre_medicamento,fecha,dosis,observaciones
        from receta where id_Receta='$_POST[codi]'") or die ("Problemas en la consulta");
        
        if ($reg=mysqli_fetch_array($registro))
        {
        echo "Numero de Receta: ".$reg['id_Receta']."</font></br>";
        echo "<font color='white'>Numero de Paciente: ".$reg['id_persona']."</font></br>";
        echo "<font color='white'>Numero de Medico: ".$reg['id_medico']."</font></br>";
        echo "<font color='white'>Nombre del Medicamento: ".$reg['nombre_medicamento']."</font></br>";
        echo "<font color='white'>Fecha: ".$reg['fecha']."</font></br>";
        echo "<font color='white'>Dosis: ".$reg['dosis']."</font></br>";
        echo "<font color='white'>Observaciones: ".$reg['observaciones']."</font></br>";
        
        mysqli_query($dental,"delete from receta where id_Receta='$_POST[codi]'")
        or die ("Problemas con el delete");
        echo "<h4><font color='white'>Se Elimino la Receta</font></h4>";
        }
        else
        {
        echo "<font color='white'>No existe la Receta</font>";
        }
        mysqli_close($dental);
        }
        ?>
    </body>
</html>