<?php
session_start();

if(isset($_SESSION['usuario']))
{
    echo "<p align='right'></br><a href='logoutmedicos.php'>Cerrar Sesion</a></p>";
}
else
{
    echo "<p align='right'><a href='login.php'>Login</a></p>";
}
?>
<html>
<head>
<title>Alta servicios</title>
</head>
<body>
<center><h1 id="M">Alta Servicios</h1></center>
<center><table>
<td id="menu"><ul ><li><a href="formaltatiposervicioM.php"><font color="black">Tipo de servicio</font></a></li><br /></ul></td>
<td id="menu"><ul><li><a href="formservicioclienteM.php"><font color="black">Servicio al cliente</font></a></li><br /></ul></td>
</table></center>
<br />
<center><img src="img/dientelimpio.png"/><br />
<a href="registrarM.php"><font size="3" color="#1600FF">Regresar</font></a></center>
<style>
body{
    background: url('img/log1.jpg') no-repeat;
}
#M{
    color: white;
}
#Menu{
    width: 20px;
    margin-top: 50px;
}
#menu ul{
    list-style: none;
}
#menu ul li{
    margin-top: 15px;
    font-family: tahoma;
    font-size: 10px;
    background:  white;
    width: 160px;
    padding-top: 10px;
    padding-bottom: 10px;
    border-radius: 0px 20px 20px 0px;
    padding-left: 10px;
    box-shadow: 10px 5px 15px #62B0FF;
    -wedkit-transition: padding-left 0.5s;
}
#menu ul li:hover{
    padding: 15px;
   
}
</style>
</body>
</html>