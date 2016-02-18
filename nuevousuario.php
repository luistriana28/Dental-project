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
<head><title>Nuevo usuario</title></head>
<body>
<form method="post" action="">
<center><h1 id="tit">Registro de Nuevo Usuario</h1>
<fieldset id="feel">
<form method="post" action="">
<font id="letras">Usuario:</font>
<input  type="text" name="user" /><br />

<font id="letras">Password:</font>
<input  type="password" name="password" /><br />

<font id="letras">Confirmar Password:</font>
<input type="password" name="cpassword" />
<br />
<input type="submit" name="Registrar Nuevo Medico" id="input" />
</form>
</fieldset>
<?php
$conexion=mysqli_connect("localhost","root","","dentaltorreon");
if (isset($_POST["user"]))
{
    $username=$_POST["user"];
    $password=$_POST["password"];
    $cpassword=$_POST["cpassword"];
    //Comprobar que los campos no esten vacios
    if ($username==null||$password==null||$cpassword==null)
    {
        echo "<font color='red'>Hay campos vacios verifica porfavor</font>";
    }
    else
    {
        //Comprobar que los password sean iguales
        if ($password!=$cpassword)
        {
            echo "<font color='red'>Las contraseñas no coinciden</font>";
        }
        else
        {
            //Comprobar que ese usuario ya existe
            $checa=mysqli_query($conexion,"select user from usuarios where user='$username'");
            $existe=mysqli_num_rows($checa);
            if ($existe>0)
            {
                echo "<font color='red'>El usuario ya existe</font>";
            }
            else
            {
                //Todo esta bien podemos insertar
                $query="insert into usuarios (user,password) values ('$username','$password')";
                mysqli_query($conexion,$query);
                echo "<font color='green'>Usuario $username registrado exitosamente</font>";

            }
        }
    }
}
mysqli_close($conexion);
?>
<br />
<center><img src="img/dientelimpio.png"/><br />
<a href="registrar.php">Regresar</a></center>
<style>
body{
  background: url('img/log1.JPG'); 
    
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
    height: 150px;
    background: #88C4FF;
}
#tit{
    color: white;
    font-family: Baskerrille Old Face;
}
</style>
</body>
</html>