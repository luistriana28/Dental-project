<?php
session_start();
if(isset($_SESSION['usuario']))
{
echo "<p align='right'><a href='index.php'>Cerrar Sesion</a></p>";
}
else
{
echo "<p align='right'><a href='loginmedicos.php'>Login</a></p>";
}
?>
<html>
    <head>
        <title>Medicos</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <center>
        <h1 id="tit">MEDICOS</h1>
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
        <br/>
        <img src="img/dientelimpio.png"/><br/>
        <a href="Editar.php">Regresar</a></center>
        
    </body>
</html>