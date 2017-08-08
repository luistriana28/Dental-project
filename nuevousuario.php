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
    <head><title>Nuevo usuario</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
		<link rel="stylesheet" type="text/css" href="estilopagina.css">
    </head>
    <body>
        <form method="post" action="">
            <center><h1 id="tit">Registro de Nuevo Usuario</h1>
            <fieldset id="feel">
                <form method="post" action="">
                    <font id="letras"> <strong>Usuario: </strong></font>
                    <input  type="text" name="user" /><br />
                    <font id="letras"> <strong>Password: </strong></font>
                    <input  type="password" name="password" /><br />
                    <font id="letras"> <strong>Confirmar Password: </strong></font>
                    <input type="password" name="cpassword" />
                    <br />
                     <br />

                    <input class="btn btn-info btn-lg" type="submit" name="Registrar Nuevo Medico" id="input" />
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
             <br />
              <br />
               <br />
                <br />
            <center><img src="img/dientelimpio.png"/><br />
            <a href="registrar.php">Regresar</a></center>
            
        </body>
    </html>