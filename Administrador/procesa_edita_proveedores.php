<html>
<head>
<title>Edita Proveedor</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","dentaltorreon") or die("Problemas en la conexion");
mysqli_query($conexion,"update provedor
                       set representante='$_POST[representante]',
                       direccion='$_POST[direccion]',
                       telefono='$_POST[telefono]',
                       marca='$_POST[marca]',
                       mercancia='$_POST[mercancia]'
                       where id_Provedor=$_POST[provedor]") or die("Problemas en el select".mysqli_error());
echo "<font color='white'>El Proveedor fue modificado con exito.</font>";
header("refresh: 2; url = administra_proveedores.php");
?>

</body>
</html>