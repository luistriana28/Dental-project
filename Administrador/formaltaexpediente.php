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
        <title>Alta Expediente</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <center><h1 id="tit"> <strong>Alta Expediente</h1></center>
        <center>
        <fieldset id="feel">
            <form method="post" action="verificaaltaexpediente.php">
                <font id="letras">Nombre  de Paciente:
                <?php
                $conexion=mysqli_connect("localhost","root","","dentaltorreon")or die("Problemas de conexion");
                $consulta="select * from persona";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='paciente'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver['id_persona']."'>".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
                    }
                echo "</select>";
                ?>
                <br /><br />
                <font id="letras">Fecha de Ingreso (AAAA-MM-DD):</font> <input type="text" name="ingreso" size="10" maxlength="10" /><br /><br />
                <font id="letras">Comentarios:</strong></font><br /><textarea name="comentarios"  cols="26" rows="5" maxlength="40">
                </textarea>
                <br />
                <input type="submit" value="Registrar" id="input" class="btn btn-info btn-lg"/>
            </form></fieldset>
            <br /> <br /> <br /> <br /> <br /> <br /> <br />
            <img src="img/dientelimpio.png"/><br />
            <a href="registrar.php">Regresar</a></center>
            
        </html>