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
        <title>Eliminar Expediente</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <center><h1 id="tit">Eliminar Expediente</h1>
        <fieldset id="feel"><form method="post">
            <font id="letras">Expediente de Paciente a Eliminar:</font><br />
            <?php
            $conexion=mysqli_connect("localhost","root")
            or die("Problemas de conexion");
            mysqli_select_db($conexion,"dentaltorreon")
            or die ("Problemas de conexion de la base de datos");
            $consulta="select expediente.id_Expediente,persona.nombre,persona.apellidoP,persona.apellidoP
            from expediente inner join persona on expediente.id_persona=persona.id_persona";
            $res=mysqli_query($conexion,$consulta);
            echo "<select name='codi'>";
                while($ver=mysqli_fetch_array($res))
                {
                echo "<option value='".$ver['id_Expediente']."'>"."No.".$ver['id_Expediente']."--".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
                }
            echo "</select><br/>";
            ?>
            <br />
            <br />
            <input type="submit" value="Eliminar" id="input"/>
        </form></fieldset>
        <?php
        if (isset($_POST['codi']))
        {
        $dental=mysqli_connect("localhost","root")
        or die ("Problemas de Conexion");
        mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la BD");
        $registro=mysqli_query($dental,"select id_Expediente,id_persona,fechaElaboracion,comentarios
        from expediente where id_Expediente='$_POST[codi]'") or die ("Problemas en la consulta");
        
        if ($reg=mysqli_fetch_array($registro))
        {
        echo "Numero de Expediente: ".$reg['id_Expediente']."</br>";
        echo "Numero de Paciente: ".$reg['id_persona']."</br>";
        echo "Fecha de Ingreso: ".$reg['fechaElaboracion']."</br>";
        echo "Comentarios: ".$reg['comentarios']."</br>";
        
        mysqli_query($dental,"delete from expediente where id_Expediente='$_POST[codi]'")
        or die ("Problemas con el delete");
        echo "<h4><font color='white'>Se Elimino el Expediente</font></h4>";
        }
        else
        {
        echo "<font color='white'>No existe el Expediente</font>";
        }
        mysqli_close($dental);
        }
        ?>
        <br />
        <img src="img/dientelimpio.png"/><br />
        <a href="EliminarM.php">Regresar</a></center>
        <br />
        <style>
        body{
        background-image:url('img/log1.JPG');
        
        }
        #letras
        {
        color: black;
        font-family: Baskerrille Old Face;
        font-size: 20px;
        }
        #input[type=submit]:hover {
        cursor: pointer;
        background: #000040;
        color: white;
        }
        #feel{
        width: 425px;
        height: 120px;
        background: #88C4FF;
        }
        #tit{
        color: white;
        font-family: Baskerrille Old Face;
        }
        </style>
    </body>
</html>