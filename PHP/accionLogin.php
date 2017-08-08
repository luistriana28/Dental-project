<?php
    session_start();
    include 'conexionBD.php';
    if(isset($_POST['user']))
    {
        //Validar que existan los datos
        if (empty($_POST['user']) || empty($_POST['pass']))
        {
            echo"<center><font color='white'><h1>No se aceptan CAMPOS VACIOS</h1></font></center>";
            header("refresh:2;url=index.php");
        }
        else
        {
            //Definir la consulta
            $login=$connection ->prepare("select user,password from ".$baseDatos.".usuarios where user=
                :username and password=:password");
            // //Definir parametros de entrada, bindParam es un metodo de PDO
            $login ->bindParam(':username',$_POST['user']);
            $login ->bindParam(':password',$_POST['pass']);
            // //ejecutamos la consulta
            $login->execute();
            $rol=$login->fetch();//obtiene el usuario
            if($login->rowCount()>0)
            {
                if($rol['user']=='admin')
                {
                    $_SESSION['user']=$rol;
                    //Abrir el archivo de gerente
                    echo "<center><font color='white'><h1>Bienvenido Administrador</h1></font></center>";
                    header("refresh:1;url=../Administrador/inicioAdministrador.php");
                }
                else
                {
                    $_SESSION['user']=$rol;
                    //Abrir el archivo de gerente
                    echo "<center><font color='white'><h1>Bienvenido  ".$_SESSION['user'][0]."</h1></font></center>";
                    header("refresh:1;url=../Medicos/inicioMedicos.php"); 
                }
            }
            else
            {
                echo 'Datos Incorrectos';
            }
        }
    }

?>
<html>
    <head>
        <title>VerificaMedico</title>
    </head>
    <body>
        <center><div id="diente"></div></center>
        <style>
        body{
        background: url(img/log1.JPG);
        }
        #diente{
        background: url('img/diente.png') no-repeat;
        height: 555px;
        width: 375px;
        }
        </style>
    </body>
</html>