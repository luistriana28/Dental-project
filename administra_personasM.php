<?php
session_start();
if(!isset($_SESSION['usuario']))
{
header('Location: loginmedicos.php');
}
echo "<p align='right'>"."<a href='logoutmedicos.php'>[Cerrar Sesión]</a></p>";
?>
<html>
    <head>
        <title>Pacientes</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <center>
        <h1 id="tit">PACIENTES</h1>
        <?php
        $conexion=mysqli_connect("localhost","root","","dentaltorreon");
        $registros=mysqli_query($conexion,"select * from persona");
        echo "<table border=1 bgcolor='silver'>";
            echo "<tr><th>ID PACIENTE</th><th>NOMBRE</th><th>APELLIDO PATERNO</th><th>APELLIDO MATERNO<th>DIRECCION</th>
            <th>TELEFONO</th><th>EDAD</th></tr>";
            while($fila=mysqli_fetch_array($registros))
            {
            echo "<tr>";
                echo "<td>";
                    echo $fila['id_persona'];
                echo "</td><td>";
                echo $fila['nombre'];
            echo "</td><td>";
            echo $fila['apellidoP'];
        echo "</td><td>";
        echo $fila['apellidoM'];
    echo "</td><td>";
    echo $fila['direccion'];
echo "</td><td>";
echo $fila['telefono'];
echo "</td><td>";
echo $fila['edad'];
echo "</td><td>";
echo "<a href='registro_edita_personasM.php?persona=".$fila['id_persona']."'>Editar</a>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>
</center>

<br />
<center><img src="img/dientelimpio.png"/><br />
<a href="EditarM.php">Regresar</a></center>
</body>
</html>