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
<title>Alta Proveedor</title>
</head>
<body>
<center><h1 id="tit">Alta Proveedor</h1><br />
<fieldset id="feel">
<form method="post" action="verificaaltaproveedor.php" >
<font id="letras">Nombre:</font> <input type="text" name="representante" size="20" maxlength="20" /><br />
<font id="letras">Direccion:</font><input type="text" name="direccion" size="20"maxlength="30" /><br />
<font id="letras">Telefono:</font><input type="text" name="telefono" size="20" maxlength="10" /><br />
<font id="letras">Fecha (AAAA-MM-DD):</font> <input type="text" name="fecha" size="20" maxlength="10" /><br />
<font id="letras">Marca: </font><input type="text" name="marca" size="20" maxlength="15" /><br />
<font id="letras">Mercancia:</font> <input type="text" name="mercancia" size="20" maxlength="30" /><br />
<font id="letras">Medico:
<?php
$conexion=mysqli_connect("localhost","root","","dentaltorreon")or die("Problemas de conexion");
$consulta="select * from medico";
$res=mysqli_query($conexion,$consulta);
echo "<select name='medico'>";
while($ver=mysqli_fetch_array($res))
{
    echo "<option value='".$ver[id_medico]."'>".$ver['nombre']." ".$ver['apellidoP']." ".$ver['apellidoM']."</option>";
}
echo "</select>";
?>

<br />
<input type="submit" value="Registrar" id="input" />
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
    height: 200px;
    background: #88C4FF;
}
#tit{
    color: white;
    font-family: Baskerrille Old Face;
}
</style>
</body>
</html>