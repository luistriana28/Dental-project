<?php
session_start();

if(isset($_SESSION['usuario']))
{
    echo "<p align='right'><a href='logoutmedicos.php'>Cerrar Sesion</a></p>";
}
else
{
    echo "<p align='right'><a href='loginmedicos.php'>Login</a></p>";
}
?>
<html>
<head>
<title>Alta Tratamiento</title>
</head>
<body>
<center><h1 id="tit">Alta Tratamiento</h1>
<fieldset id="feel">
<form method="post" action="verificaaltatratamientoM.php">
<font id="letras">Tipo de Servicio:</font>
<?php
$conexion=mysqli_connect("localhost","root","","dentaltorreon")or die("Problemas de conexion");
$consulta="select * from tipodeservicio";
$res=mysqli_query($conexion,$consulta);
echo "<select name='servicio'>";
while($ver=mysqli_fetch_array($res))
{
    echo "<option value='".$ver['id_TipoDeServicio']."'>".$ver['nombre_servicio']."</option>";
}
echo "</select><br/><br/>";
?>
<font id="letras">Nombre de Tratamiento:</font> <input type="text" name="nombre_tratamiento" size="10" maxlength="30" /><br /><br />
<font id="letras">Comentarios:</font> <textarea name="comentarios" cols="40" rows="5"></textarea><br /><br />

<input type="submit" value="Registrar" id="input" />
<br />
<br />
</form></fieldset></center><br />
<center><img src="img/dientelimpio.png"/><br />
<a href="registrarM.php"><font size="3" color="#1600FF">Regresar</font></a></center>
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
    height: 240px;
    background:#88c4ff;
}
#tit{
    color: white;
    font-family: Baskerrille Old Face;
}
</style>
</body>
</html>