<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Editar Medicos</title>
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
                        <li class="active"><a href="Editar.php">Inicio</a></li>
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
        <h1 id="tit">Editat MEDICOS</h1>
        <?php
        $conexion=mysqli_connect("localhost","root","","dentaltorreon");
        $registros=mysqli_query($conexion,"select * from medico");
        echo "<table border=1 bgcolor='silver'>";
            echo "<tr><th>NOMBRE</th><th>APELLIDO PATERNO</th><th>APELLIDO MATERNO<th>TELEFONO</th>
            <th>CEDULA</th><th>ESPECIALIDAD</th></tr>";
            while($fila=mysqli_fetch_array($registros))
            {
            echo "<tr><td>".$fila['nombre']."</td><td>".$fila['apellidoP']."</td><td>".$fila['apellidoM']."</td><td>";
            echo $fila['telefono']."</td><td>".$fila['cedula']."</td><td>".$fila['especialidad']."</td><td>";
            echo "<a href='registro_edita_medicos.php?medico=".$fila['id_medico']."'>Editar</a></td></tr>";
            }
        echo "</table>";
        ?>
        </center> 
    </body>
</html>