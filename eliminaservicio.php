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
<title>Eliminar Tipo de Servicio</title>
</head>
<body>
<center>
<h1 id="tit">Eliminar Servicio</h1>
<fieldset id="feel"><form method="post">
<font id="letras">Tipo de Servicio a Eliminar:</font><br />
<?php
$conexion=mysqli_connect("localhost","root")
or die("Problemas de conexion");
mysqli_select_db($conexion,"dentaltorreon")
or die ("Problemas de conexion de la base de datos");
$consulta="select * from tipodeservicio";
$res=mysqli_query($conexion,$consulta);
echo "<select name='servicio'>";
while($ver=mysqli_fetch_array($res))
{
    echo "<option value='".$ver['id_TipoDeServicio']."'>".$ver['nombre_servicio']."</option>";
}
echo "</select><br/>";
?>
<br />
<br />
<input type="submit" value="Eliminar" id="input"/>
</form></fieldset>
<?php
if (isset($_POST['servicio']))
{
    $dental=mysqli_connect("localhost","root") 
    or die ("Problemas de Conexion");
    mysqli_select_db($dental,"dentaltorreon") or die ("Problemas en la seleccion de la BD");
    $registro=mysqli_query($dental,"select id_TipoDeServicio,nombre_servicio 
    from tipodeservicio where id_TipoDeServicio='$_POST[servicio]'") or die ("Problemas en la consulta");
     
     if ($reg=mysqli_fetch_array($registro))
     {
        echo "<font color='white'>Numero de Servicio: ".$reg['id_TipoDeServicio']."</font></br>";
  echo "<font color='white'>Nombre de Servicio: ".$reg['nombre_servicio']."</font></br>";        
        mysqli_query($dental,"delete from tipodeservicio where id_TipoDeServicio='$_POST[servicio]'")
        or die ("Problemas con el delete");
        echo "<h4><font color='white'>Se Elimino el Servicio</font></h4>";
     }
     else
     {
        echo "<font color='white'>No existe</font>";
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