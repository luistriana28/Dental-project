<html>
<head>
<title>EDICION TRATAMIENTO</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","dentaltorreon") or die("Problemas en la conexion");
mysqli_query($conexion,"update tratamiento
                       set id_tratamiento='$_POST[tratamiento]', 
                       id_TipoDeServicio='$_POST[servicio]',
                       nombre_tratamiento='$_POST[nombre]',
                       comentarios='$_POST[comentarios]'
                       where id_tratamiento='$_POST[tratamiento]'") or die ("Problemas en el Update".mysqli_error($conexion));
echo "<font color='white'>El Tratamiento fue modificado con exito.</font>";
header('refresh:2;url=administra_tratamiento.php')

?>

</body>
</html>