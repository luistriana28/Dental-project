<?php
session_start();

if(isset($_SESSION['usuario']))
{
    echo "<p align='right'>Usuario: ".$_SESSION['usuario']."</br><a href='logoutmedicos.php'>Cerrar Sesion</a></p>";
}
else
{
    echo "<p align='right'><a href='login.php'>Login</a></p>";
}
?>
<html>
<head>
<title>Buscar Receta</title>
</head>
<body>
<center>
<h3 id="tit">Buscar Receta Por Medicamento</h3>
<fieldset id="feel"><form method="post">
<font id="letras">Seleccione al Paciente:</font>
<?php
$conexion=mysqli_connect("localhost","root")
or die("Problemas de conexion");
mysqli_select_db($conexion,"dentaltorreon")
or die ("Problemas de conexion de la base de datos");
$consulta="select * from receta";
$res=mysqli_query($conexion,$consulta);
echo "<select name='medicamento'>";
while($ver=mysqli_fetch_array($res))
{
    echo "<option value='".$ver['nombre_medicamento']."'>".$ver['nombre_medicamento']."</option>";
}
echo "</select><br/><br/>";
?>
<input  type="submit" value="Buscar"/>
</form></fieldset></center>
<center>

<?php
if(isset($_POST['medicamento']))
{
    $conexion=mysqli_connect("localhost","root")
    or die("Problemas de conexion");
    mysqli_select_db($conexion,"dentaltorreon")
    or die ("Problemas de conexion de la base de datos");
    $busca=mysqli_query($conexion,"select receta.id_Receta,receta.nombre_medicamento,receta.dosis,receta.fecha,receta.observaciones,persona.nombre,persona.apellidoP
    from receta inner join persona on receta.id_persona=persona.id_persona where nombre_medicamento='$_POST[medicamento]'");
    $total=mysqli_num_rows($busca);
    if($total==0)
    {
        echo "<font color='white'>No hay Recetas registradas con ese Medicamento</font><br/>";
    }
    else
    {
        echo "<table border='1' bgcolor='silver'>";
        echo "<tr><td>Paciente Recetado</td><td>Dosis Recetada</td><td>Observaciones</td><td>Fecha</td></tr>";
        while($reg=mysqli_fetch_array($busca))
        {
            echo "<tr><td>".$reg['nombre']." ".$reg['apellidoP']."</td>
            <td>".$reg['dosis']."</td><td>".$reg['observaciones']."</td><td>".$reg['fecha']."</td></td>";
            $id=$reg['nombre'];
            $npaciente=mysqli_query($conexion,"select nombre from persona where id_persona='$id'");
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
<a href="buscarM.php">Regresar</font></a></center>
<style>
body{
  background: url('img/log1.jpg'); 
    
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
    height: 150px;
    background: #88c4ff;
}
#tit{
    color: white;
    font-family: Baskerrille Old Face;
}
</style>
</body>
</html>