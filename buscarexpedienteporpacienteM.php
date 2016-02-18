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
<head><title>Buscar Proveedor</title></head>
<body>
<center>
<h1 id="tit">Buscar Expediente Por Paciente</h1>
<fieldset  id="feel">
<form method="post">
<font id="letras">Seleccione el Paciente:</font><br />
<?php
$conexion=mysqli_connect("localhost","root")
or die("Problemas de conexion");
mysqli_select_db($conexion,"dentaltorreon")
or die ("Problemas de conexion de la base de datos");
$consulta="select * from persona";
$res=mysqli_query($conexion,$consulta);
echo "<select name='expe'>";
while($ver=mysqli_fetch_array($res))
{
    echo "<option value='".$ver[id_persona]."'>".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
}
echo "</select><br/><br/>";
?>
<input type="submit" value="Buscar Expediente" />
</form></fieldset></center>
<br />
<br />
<center>
<?php
if(isset($_POST['expe']))
{
    $conexion=mysqli_connect("localhost","root")
    or die("Problemas de conexion");
    mysqli_select_db($conexion,"dentaltorreon")
    or die ("Problemas de conexion de la base de datos");
    $busca=mysqli_query($conexion,"select expediente.*,persona.* from expediente inner join persona on expediente.id_persona=persona.id_persona 
    where expediente.id_persona='$_POST[expe]'");
    $total=mysqli_num_rows($busca);
    if($total==0)
    {
        echo "<font color='white'>No hay Expediente Registrado para el Paciente</font><br/>";
    }
    else
    {
        echo "<table border='1' bgcolor='silver'>";
        echo "<tr><td>N.Expediente</td><td>Nombre</td><td>Apellido Paterno</td><td>Telefono</td><td>Fecha de Ingreso</td><td>Comentarios</td></tr>";
        while($reg=mysqli_fetch_array($busca))
        {
            echo "<tr><td>".$reg['id_Expediente']."</td><td>".$reg['nombre']."</td><td>".$reg['apellidoP']."</td><td>".$reg['telefono']."</td>
            <td>".$reg['ingreso']."</td><td>".$reg['comentarios']."</td>";
            $id=$reg['nombre'];
            $npaciente=mysqli_query($conexion,"select * from expediente where id_Expediente='$id'");
            $row=mysqli_fetch_array($npaciente);
            echo $row['nombre']."</td></tr>";    
        }
        echo "</table>";
        mysqli_close($conexion);          
    }    
}
?>
</center>
<br />
<center><img src="img/dientelimpio.png"/><br />
<a href="buscarM.php">Regresar</a></center>
<style>
body{
  background-image:url('img/log1.jpg'); 
    

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
    background: #88c4ff;
}
#tit{
    color: white;
    font-family: Baskerrille Old Face;
}
</style>
</body>
</html>
