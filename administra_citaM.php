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
        <title>Edita Cita</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <center>
        <h1 id="tit">CITA</h1>
        <?php
        $conexion=mysqli_connect("localhost","root","","dentaltorreon");
        $registros=mysqli_query($conexion,"select * from cita inner join persona where cita.id_persona=persona.id_persona");
        echo "<table border=1 bgcolor='silver'>";
            echo "<tr><th>No.Cita</th><th>Fecha de Cita</th><th>Nombre del Paciente</th></tr>";
            while($fila=mysqli_fetch_array($registros))
            {
            echo "<tr><td>".$fila['id_Cita']."</td><td>".$fila['fecha']."</td><td>".$fila['nombre']." ".$fila['apellidoP'];
            echo "</td><td><a href='registro_edita_citaM.php?cita=".$fila['id_Cita']."&fecha=".$fila['fecha']."'>Editar</a>";
        echo "</td></tr>";
        }
    echo "</table>";
    ?>
    </center>
    
    <br />
    <center><img src="img/dientelimpio.png"/><br />
    <a href="EditarM.php">Regresar</a></center>
</body>
</html>