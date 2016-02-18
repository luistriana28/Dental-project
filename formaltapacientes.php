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
<title>Alta Paciente</title>
</head>
<body>
<center><h1 id="tit" >Alta Paciente</h1>
<fieldset id="feel">
<form method="post" action="verificaaltapacientes.php">
<font id="letras">Nombre:</font> <input type="text" name="nombre" size="20"/><br />
<font id="letras">Apellido Paterno:</font> <input type="text" name="apellidoP" size="20" maxlength="30"/><br />
<font id="letras">Apellido Materno:</font> <input type="text" name="apellidoM" size="20"maxlength="30"/><br />
<font id="letras">Direccion:</font> <input type="text" name="direccion" size="20" maxlength="30"/><br />
<font id="letras">Edad:</font> <input type="text" name="edad" size="20" maxlength="30"/><br />
<font id="letras">Telefono:</font><input type="text" name="telefono" size="20" maxlength="10"/><br />
<input type="submit" value="Registrar" id="input" />
</form>
</fieldset>
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