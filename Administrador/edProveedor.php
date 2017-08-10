<?php
session_start();
if (empty($_SESSION["user"])) {
header("Location:../index.php");
}
?>
<html>
    <head>
        <title>Edita Proveedores</title>
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
        <h1 id="tit">Editar PROVEEDORES</h1>
        <?php
        $conexion=mysqli_connect("localhost","root","","dentaltorreon");
        $registros=mysqli_query($conexion,"select * from provedor inner join medico where provedor.id_medico=medico.id_medico");
        echo "<table border=1 bgcolor='silver'>";
            echo "<tr><th>REPRESENTANTE</th><th>DIRECCION</th><th>TELEFONO<th>MARCA</th>
            <th>MERCANCIA</th><th>ID.MEDICO</th><th>DOCTOR</th></tr>";
            while($fila=mysqli_fetch_array($registros))
            {
            echo "<tr>";
                echo "<td>";;
                    echo $fila['representante'];
                echo "</td><td>";
                echo $fila['direccion'];
            echo "</td><td>";
            echo $fila['telefono'];
        echo "</td><td>";
        echo $fila['marca'];
    echo "</td><td>";
    echo $fila['mercancia'];
echo "</td><td>";
echo $fila['id_medico'];
echo "</td><td>";
echo $fila['nombre']." ".$fila['apellidoP'];
echo "</td><td>";
echo "<a href='registro_edita_proveedores.php?provedor=".$fila['id_Provedor']."'>Editar</a>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>
</center>
</body>
</html>