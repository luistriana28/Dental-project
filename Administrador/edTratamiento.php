<?php
session_start();
if(!isset($_SESSION['usuario']))
{
header('Location: loginmedicos.php');
}
echo "<p align='right'>"."<a href='logoutmedicos.php'>[Cerrar Sesi�n]</a></p>";
?>
<html>
    <head>
        <title>Edita Tratamiento</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilopagina.css">
    </head>
    <body>
        <center>
        <h1 id="tit">Edita Tratamiento</h1>
        <?php
        $conexion=mysqli_connect("localhost","root","","dentaltorreon");
        $registros=mysqli_query($conexion,"select * from tratamiento inner join tipodeservicio where tratamiento.id_TipoDeServicio=tipodeservicio.id_TipoDeServicio");
        echo "<table border=1 bgcolor='silver'>";
            echo "<tr><th>Nombre de Tratamiento</th><th>Comentarios</th><th>Nombre del Servicio</th></tr>";
            while($fila=mysqli_fetch_array($registros))
            {
            echo "<tr>";
                echo "<td>";
                    
                    echo $fila['nombre_tratamiento'];
                echo "</td><td>";
                echo $fila['comentarios'];
            echo "</td><td>";
            echo $fila['nombre_servicio'];
        echo "</td><td>";
        echo "<a href='registro_edita_tratamiento.php?tratamiento=".$fila['id_tratamiento']."'>Editar</a>";
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