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
header('refresh:2;url=edReceta.php')


?>