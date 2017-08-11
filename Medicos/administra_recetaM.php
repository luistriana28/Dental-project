<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Receta</title>
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
                        <li class="active"><a href="inicioMedico.php">Inicio</a></li>
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
        <h1 id="tit">Edita Receta</h1>
        <?php
        $conexion=mysqli_connect("localhost","root","","dentaltorreon");
        $registros=mysqli_query($conexion,"select * from receta inner join persona where receta.id_persona=persona.id_persona");
        echo "<table border=1 bgcolor='silver'>";
            echo "<tr><th>No.Receta</th><th>Fecha de la Receta</th><th>Medicamento</th><th>Observaciones</th><th>Dosis</th>
            <th>Paciente</th></tr>";
            while($fila=mysqli_fetch_array($registros))
            {
            echo "<tr>";
                echo "<td>";
                    echo $fila['id_Receta'];
                echo "</td><td>";
                echo $fila['fecha'];
            echo "</td><td>";
            echo $fila['nombre_medicamento'];
        echo "</td><td>";
        echo $fila['observaciones'];
    echo "</td><td>";
    echo $fila['dosis'];
echo "</td><td>";
echo $fila['nombre']." ".$fila['apellidoP'];
echo "</td><td>";
echo "<a href='registro_edita_recetaM.php?receta=".$fila['id_Receta']."&fecha=".$fila['fecha']."'>Editar</a>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>
</center>
</body>
</html>