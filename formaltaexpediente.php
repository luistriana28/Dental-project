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
</head>
<body>
<center><h1 id="tit">Alta Expediente</h1></center>
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
<font id="letras">Comentarios:</font><br /><textarea name="comentarios"  cols="50" rows="5" maxlength="60">
</textarea>
<br />
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
    height: 240px;
    background: #88C4FF;
}
#tit{
    color: white;
    font-family: Baskerrille Old Face;
}

</style>
</html>