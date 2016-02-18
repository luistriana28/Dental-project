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
<title>Eliminar Medico</title>
</head>
<body>
<center><h1 id="tit">Eliminar Medico</h1></center>
<center>
<fieldset id="feel"><form method="post">
</a><font id="letras">Ingrese el codigo del Medico a Eliminar:</font><br />
<?php
$conexion=mysqli_connect("localhost","root")
or die("Problemas de conexion");
mysqli_select_db($conexion,"dentaltorreon")
or die ("Problemas de conexion de la base de datos");
$consulta="select * from medico";
$res=mysqli_query($conexion,$consulta);
echo "<select name='codi'>";
while($ver=mysqli_fetch_array($res))
{
    echo "<option value='".$ver['id_medico']."'>".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
}
echo "</select><br/>";
?>
<br />
<br />
<input type="submit" value="Eliminar" id="i"/>
</form></fieldset>
<?php
if (isset($_POST['codi']))
{
    $dental=mysqli_connect("localhost","root") 
    or die ("Problemas de Conexion");
    mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la BD");
    $registro=mysqli_query($dental,"select id_medico,cedula,especialidad,nombre,apellidoP,apellidoM,telefono 
    from medico where id_medico='$_POST[codi]'") or die ("Problemas en la consulta");
     
     if ($reg=mysqli_fetch_array($registro))
     {
        echo "Codigo: ".$reg['id_medico']."</br>";
       echo "Cedula: ".$reg['cedula']."</br>";
       echo "Especialidad: ".$reg['especialidad']."</br>";
       echo "Nombre: ".$reg['nombre']."</br>";
       echo "Apellido Paterno: ".$reg['apellidoP']."</br>";
       echo "Apellido Materno: ".$reg['apellidoM']."</br>";
       echo "Telefono: ".$reg['telefono']."</br>";
        
        mysqli_query($dental,"delete from medico where id_medico='$_POST[codi]'")
        or die ("Problemas con el delete");
        echo "<h4><font color='white'>Se elimino el Medico</font></h4>";
     }
     else
     {
        echo "<font color='white'>No existe Medico</font>";
     }
     mysqli_close($dental);
}
?>
<br />

<img src="img/dientelimpio.png"/><br />
<a href="Eliminar.php">Regresar</a></center>
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