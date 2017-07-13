<html>
<head>
<title>EDICION RECETA</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","dentaltorreon") or die("Problemas en la conexion");
mysqli_query($conexion,"update receta
                       set id_Receta='$_POST[receta]', 
                       fecha='$_POST[fecha]',
                       id_persona='$_POST[paciente]',
                       id_medico='$_POST[medico]',
                       nombre_medicamento='$_POST[medicamento]',
                       observaciones='$_POST[observaciones]',
                       dosis='$_POST[dosis]'             
                       where id_Receta='$_POST[receta]'") or die ("Problemas en el Update".mysqli_error());
echo "<font color='white'>La Receta fue modificada con exito.</font>";
header('refresh:2;url=administra_receta.php')


?>

</body>
</html>