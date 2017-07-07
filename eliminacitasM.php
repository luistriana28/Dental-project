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
        <title>Eliminar Cita</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <center>
        <h1 id="tit">Eliminar Cita</h1>
        <fieldset id="feel">
            <form method="post">
                <font id="letras">Cita a Eliminar:</font><br />
                <?php
                $conexion=mysqli_connect("localhost","root")
                or die("Problemas de conexion");
                mysqli_select_db($conexion,"dentaltorreon")
                or die ("Problemas de conexion de la base de datos");
                $consulta="select cita.id_Cita,cita.fecha,persona.nombre,persona.apellidoP,persona.apellidoP
                from cita inner join persona on cita.id_persona=persona.id_persona";
                $res=mysqli_query($conexion,$consulta);
                echo "<select name='codi'>";
                    while($ver=mysqli_fetch_array($res))
                    {
                    echo "<option value='".$ver['id_Cita']."'>"."Dia ".$ver['fecha']."--".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
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
            $registro=mysqli_query($dental,"select id_Cita,fecha,id_persona,id_medico,id_TipoDeServicio
            from cita where id_cita='$_POST[codi]'") or die ("Problemas en la consulta");
            
            if ($reg=mysqli_fetch_array($registro))
            {
            echo "Numero de Cita: ".$reg['id_Cita']."</br>";
            echo "Fecha: ".$reg['fecha']."</br>";
            echo "Persona: ".$reg['id_persona']."</br>";
            echo "Medico: ".$reg['id_medico']."</br>";
            echo "Servicio: ".$reg['id_TipoDeServicio']."</br>";
            
            mysqli_query($dental,"delete from cita where id_cita='$_POST[codi]'")
            or die ("Problemas con el delete");
            echo "<h4><font color='white'>Se la Elimino Cita</font></h4>";
            }
            else
            {
            echo "<font color='white'>No existe la Cita</font>";
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