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
        <title>Alta Proveedor</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <center><h1 id="tit">Alta Proveedor</h1><br />
        <fieldset id="feel">
            <form method="post" action="verificaaltaproveedor.php" >
                <font id="letras"> <strong>Nombre: </strong></font> <input type="text" name="representante" size="20" maxlength="20" /><br />
                <font id="letras"> <strong>Direccion: </strong></font><input type="text" name="direccion" size="20" maxlength="30" /><br />
                <font id="letras"> <strong>Telefono: </strong></font><input type="text" name="telefono" size="20" maxlength="10" /><br />
                <font id="letras"> <strong>Fecha (AAAA-MM-DD): </strong></font> <input type="text" name="fecha" size="20" maxlength="10" /><br />
                <font id="letras">  <strong>Marca: </strong> </font><input type="text" name="marca" size="20" maxlength="15" /><br />
                <font id="letras"> <strong>Mercancia: </strong></font> <input type="text" name="mercancia" size="20" maxlength="30" /><br />
                <font id="letras">  <strong>Medico: </strong>
                <?php
                $conexion=mysqli_connect("localhost","root","","dentaltorreon")or die("Problemas de conexion");
                $consulta="select * from medico";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='medico'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver[id_medico]."'>".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
                    }
                echo "</select>";
                ?>
                <br />
                 <br />
                <input type="submit" value="Registrar" id="input" class="btn btn-info btn-lg" />
            </form></fieldset>
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
            <br />
             <br />
            <img src="img/dientelimpio.png"/><br />
            <a href="registrar.php">Regresar</a></center>
            
        </body>
    </html>