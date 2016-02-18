<?php
session_start();

if(isset($_SESSION['usuario']))
{
    echo "<p align='right'>Usuario: ".$_SESSION['usuario']."</br><a href='logoutmedicos.php'>Cerrar Sesion</a></p>";
}
else
{
    echo "<p align='right'><a href='login.php'>Login</a></p>";
}
?>
<html>
<title>Buscar Cita</title><head>
</head>
<body>
<center>
<h3 id="tit">Buscar Cita Por Medico</h3>
<fieldset id="feel"><form method="post">
<font id="letras">Seleccione al Medico:</font>
<?php
$conexion=mysqli_connect("localhost","root")
or die("Problemas de conexion");
mysqli_select_db($conexion,"dentaltorreon")
or die ("Problemas de conexion de la base de datos");
$consulta="select * from medico";
$res=mysqli_query($conexion,$consulta);
echo "<select name='apellido'>";
while($ver=mysqli_fetch_array($res))
{
    echo "<option value='".$ver[id_medico]."'>".$ver['nombre']." ".$ver['apellidoP']."</option>";
}
echo "</select><br/><br/>";
?>
<input  type="submit" value="Buscar"/>
</form></fieldset></center>
<center>
<?php
if(isset($_POST['apellido']))
{
    $conexion=mysqli_connect("localhost","root")
    or die("Problemas de conexion");
    mysqli_select_db($conexion,"dentaltorreon")
    or die ("Problemas de conexion de la base de datos");
    $busca=mysqli_query($conexion,"select id_Cita,persona.id_persona,persona.nombre,persona.apellidoP,
            persona.apellidoM,persona.direccion,persona.telefono,persona.edad from cita inner join persona on cita.id_persona=persona.id_persona
            where id_medico='$_POST[apellido]'");
    $total=mysqli_num_rows($busca);
    if($total==0)
    {
        echo "<font color='white'>No hay Citas registradas para ese Medico</font><br/>";
    }
    else
    {
        echo "<table border='1' bgcolor='silver'>";
        echo "<tr><td>No.Cita</td><td>Nombre</td><td>Apellido Paterno</td><td>Apellido Materno</td><td>Direccion</td><td>Telefono</td>
        <td>Edad</td></tr>";
        while($reg=mysqli_fetch_array($busca))
        {
            echo "<tr><td>".$reg['id_Cita']."</td><td>".$reg['nombre']."</td><td>".$reg['apellidoP']."</td><td>".$reg['apellidoM']."</td>
            <td>".$reg['direccion']."</td><td>".$reg['telefono']."</td><td>".$reg['edad']."</td>";
            $id=$reg['nombre'];
            $npaciente=mysqli_query($conexion,"select * from cita where id_medico='$id'");
            $row=mysqli_fetch_array($npaciente);
            echo $row['nombre']."</td></tr>";
            
            
            
        }
        echo "</table>";
        mysqli_close($conexion);          
    }    
}
?>
</center>
<br />
<img src="img/dientelimpio.png"/><br />
<a href="buscar.php">Regresar</font></a>
<style>
body{
  background: url('img/log1.JPG'); 
    
}
#letras
{
    color: white;
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
    height: 150px;
    background: #1E1E1E;
}
#tit{
    color: white;
    font-family: Baskerrille Old Face;
}
</style>
</body>
</html>