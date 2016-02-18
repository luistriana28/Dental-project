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
<head><title>Buscar Expediente</title></head>
<body>
<center>
<h1 id="tit">Buscar Expediente por Fecha de Ingreso</h1>
<fieldset id="feel"><form method="post">
<font id="letras">Buscar Expediente por Fecha de Ingreso:</font><br />
<?php
$conexion=mysqli_connect("localhost","root")
or die("Problemas de conexion");
mysqli_select_db($conexion,"dentaltorreon")
or die ("Problemas de conexion de la base de datos");
$consulta="select distinct ingreso from expediente";
$res=mysqli_query($conexion,$consulta);
echo "<select name='ingreso'>";
while($ver=mysqli_fetch_array($res))
{
    echo "<option value='".$ver['ingreso']."'>".$ver['ingreso']."</option>";
}
echo "</select><br/><br/>";
?>
<input type="submit" value="Buscar Expediente" />
</form>
</fieldset></center>
<br />
<img src="img/dientelimpio.png"/><br />
<a href="buscar.php">Regresar</a>
<?php
if(isset($_POST['ingreso']))
{
    $conexion=mysqli_connect("localhost","root")
    or die("Problemas de conexion");
    mysqli_select_db($conexion,"dentaltorreon")
    or die ("Problemas de conexion de la base de datos");
    $busca=mysqli_query($conexion,"select expediente.id_Expediente,expediente.id_persona,expediente.ingreso,expediente.comentarios,persona.nombre,
    persona.apellidoP,persona.apellidoM,persona.telefono,direccion from expediente inner join persona on expediente.id_persona=persona.id_persona 
    where expediente.ingreso='$_POST[ingreso]'");
    $total=mysqli_num_rows($busca);
    if($total==0)
    {
        echo "No hay Expediente Registrado en esa Fecha<br/>";
    }
    else
    {
        echo "<table border='1'>";
        echo "<tr><td>No.Expediente</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Telefono</td><td>Direccion</td>
        <td>Fecha de Ingreso</td><td>Comentarios</td></tr>";
        while($reg=mysqli_fetch_array($busca))
        {
            echo "<tr><td>".$reg['id_Expediente']."</td><td>".$reg['nombre']."</td><td>".$reg['apellidoP']."</td><td>".$reg['apellidoM']."</td>
            <td>".$reg['telefono']."</td><td>".$reg['direccion']."</td>
            <td>".$reg['ingreso']."</td><td>".$reg['comentarios']."</td>";
            $id=$reg['ingreso'];
            $npaciente=mysqli_query($conexion,"select ingreso from expediente where id_Expediente='$id'");
            $row=mysqli_fetch_array($npaciente);
            echo $row['nombre']."</td></tr>";    
        }
        echo "</table>";
        mysqli_close($conexion);          
    }    
}
?>

<style>
body{
  background-image:url('img/log1.JPG'); 
    

}
#letras
{
    color: white;
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
    background: #1E1E1E;
}
#tit{
    color: white;
    font-family: Baskerrille Old Face;
}
</style>

</body>
</html>
