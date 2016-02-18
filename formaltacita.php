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
<title>Alata Cita</title>
</head>
<body>
<center><h1 id="tit">Alta Cita</h1>
<fieldset id="feel">
<form method="post" action="verificaaltacitas.php">
<font id="letras">Cita AAAA-MM-DD: </font><input name="fecha" type="text" maxlength="12" /><br />
<font id="letras">Nombre de Paciente:</font>
<?php
$conexion=mysqli_connect("localhost","root") or die("Problemas de conexion");
mysqli_select_db($conexion,"dentaltorreon") or die ("Problemas de conexion de la base de datos");
$consulta="select * from persona";
$res=mysqli_query($conexion,$consulta);
echo "<select name='persona'>";
while($ver=mysqli_fetch_array($res))
{
    echo "<option value='".$ver[id_persona]."'>".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
}
echo "</select><br/>";
?>
<font id="letras">Nombre de Medico: </font>
<?php
$conexion=mysqli_connect("localhost","root")
or die("Problemas de conexion");
mysqli_select_db($conexion,"dentaltorreon")
or die ("Problemas de conexion de la base de datos");
$consulta="select * from medico";
$res=mysqli_query($conexion,$consulta);
echo "<select name='medico'>";
while($ver=mysqli_fetch_array($res))
{
    echo "<option value='".$ver[id_medico]."'>".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
}
echo "</select><br/>";
?>
<font id="letras">Tipo de Servicio:</font>
<?php
$conexion=mysqli_connect("localhost","root") or die("Problemas de conexion");
mysqli_select_db($conexion,"dentaltorreon") or die ("Problemas de conexion de la base de datos");
$consulta="select * from tipodeservicio";
$res=mysqli_query($conexion,$consulta);
echo "<select name='servicio'>";
while($ver=mysqli_fetch_array($res))
{
    echo "<option value='".$ver[id_TipoDeServicio]."'>".$ver['nombre_servicio']."</option>";
}
echo "</select><br/>";
?>
<input type="submit" value="Registrar" id="input"/>
</form></fieldset>
<br />
<img src="img/dientelimpio.png"/><br />
<a href="registrar.php">Regresar</a></center>
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
    height: 150px;
    background: #88C4FF;
}
#tit{
    color: white;
    font-family: Baskerrille Old Face;
}
</style>
</body>
</html>