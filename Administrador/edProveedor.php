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
        <title>Edita Proveedores</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
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
<br />
<img src="img/dientelimpio.png"/><br />
<a href="Editar.php">Regresar</a></center>

</body>
</html>