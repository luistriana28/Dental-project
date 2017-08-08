<?php
session_start();
$conexion=mysqli_connect("localhost", "root");
mysqli_select_db($conexion,"dentaltorreon");

$username= $_POST['user'];
$password=$_POST['pass'];

if ($username==NULL || $password==NULL)
{
    echo"<center><font color='white'><h1>Hay campos vacios</h1></font></center>";
    header("refresh:2;url=index.php");
    
}
else
{
    $checa="select user,password from usuarios where user='$username' and password='$password'";
    $query=mysqli_query($conexion,$checa);
    $data=mysqli_fetch_array($query);
    
    if($data['user']!=$username || $data['password']!=$password)
    {
        echo"<center><font color='white'><h1>Login Incorrecto</h1></font></center>";
        header("refresh:2;url=index.php");
    }
    else
    {
        if($data['user']=='admin')
        {
            $_SESSION['usuario']=$data['user'];
            echo "<center><font color='white'><h1>Bienvenido Administrador</h1></font></center>";
            header("refresh:1;url=Administrador.php");
        }
        else
        {
            $_SESSION['usuario']=$data['user'];
            echo "<center><font color='white'><h1>Bienvenido  ".$_SESSION['usuario']."</h1></font></center>";
            header("refresh:1;url=Medicos.php");  
        }
    }
}
mysqli_close($conexion);5


?>
<html>
<head>
<title>VerificaMedico</title>
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
</head>
<body>
<center><div id="diente"></div></center>

</body>
</html>