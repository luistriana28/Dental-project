<html>
<head>
<title>EDICION CITAS</title>
</head>
<body>
<?php
$conexion=mysqli_connect("localhost","root","","dentaltorreon") or die("Problemas en la conexion");
mysqli_query($conexion,"update cita
                       set id_Cita='$_POST[cita]', 
                       fecha='$_POST[fecha]',
                       id_persona='$_POST[paciente]',
                       id_medico='$_POST[medico]',
                       id_TipoDeServicio='$_POST[servicio]'                       
                       where id_Cita='$_POST[cita]'") or die ("Problemas en el Update".mysqli_error());
echo "<font color='white'>La Cita fue modificada con exito.</font>";
header('refresh:2;url=administra_cita.php')


?>
<style>
body{
    background: url('img/log1.JPG');
}
</style>
</body>
</html>