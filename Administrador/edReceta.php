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
        <title>Edita Receta</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilopagina.css">
    </head>
    <body>
        <center>
        <h1 id="tit">Edita Receta</h1>
        <?php
        $conexion=mysqli_connect("localhost","root","","dentaltorreon");
        $registros=mysqli_query($conexion,"select * from receta inner join persona where receta.id_persona=persona.id_persona");
        echo "<table border=1 bgcolor='silver'>";
            echo "<tr><th>Fecha de la Receta</th><th>Medicamento</th><th>Observaciones</th><th>Dosis</th>
            <th>Paciente</th></tr>";
            while($fila=mysqli_fetch_array($registros))
            {
            echo "<tr>";
                echo "<td>";
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
echo "<a href='registro_edita_receta.php?receta=".$fila['id_Receta']."&fecha=".$fila['fecha']."'>Editar</a>";
echo "</td>";
echo "</tr>";
}
echo "</table>";
?>
<br />
<img src="img/dientelimpio.png"/><br />
<a href="Editar.php">Regresar</a></center>

</body>
</html>