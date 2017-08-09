<?php
session_start();
if(isset($_SESSION['user']))
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
        <title>Editar Cita</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilopagina.css">
    </head>
    <body>
        <center>
        <h1 id="tit">CITA</h1>
        <?php
        $conexion=mysqli_connect("localhost","root","","dentaltorreon");
        $registros=mysqli_query($conexion,"select * from cita inner join persona where cita.id_persona=persona.id_persona");
        echo "<table border=1 bgcolor='silver'>";
            echo "<tr><th>Fecha de Cita</th><th>Nombre del Paciente</th></tr>";
            while($fila=mysqli_fetch_array($registros))
            {
            echo "<tr><td>".$fila['fecha']."</td><td>".$fila['nombre']." ".$fila['apellidoP']."</td><td>";
            echo "<a href='registro_edita_cita.php?cita=".$fila['id_Cita']."&fecha=".$fila['fecha']."'>Editar</a></td></tr>";
            }
        echo "</table>";
        ?>
        <br/>
        <img src="../img/dientelimpio.png"/><br/>
        <a href="Editar.php">Regresar</a></center>
    </body>
</html>