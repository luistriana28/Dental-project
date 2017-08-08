<html>
<head>
<title>EDICION PERSONAS</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","dentaltorreon") or
  die("Problemas en la conexion");
mysqli_query($conexion,"update medico
                       set nombre='$_POST[nombre]',
                       apellidoP='$_POST[apellidoP]',
                       apellidoM='$_POST[apellidoM]',
                       telefono='$_POST[telefono]',
                       especialidad='$_POST[especialidad]',
                       cedula='$_POST[cedula]'
                       where id_medico=$_POST[id_medico]") 
or die("Problemas en el select:".mysql_error());

echo "<font color='white'>El Medico fue modificado con exito.</font>";
header("refresh: 2; url = administra_medicos.php");
?>

</body>
</html>