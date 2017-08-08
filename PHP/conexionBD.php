<!DOCTYPE html>
<html>
<head>
    <title>Conexion</title>
</head>
<body>
<?php
    //Nombre de la base de datos
    $baseDatos="dentaltorreon";
    //usuario 
    $user="root";
    //contraseña del user
    $password="";
    //Nombre del Servidor
    $host="localhost";
    //Creamos la cadena de conexion instanciando el constructor de PDO
    $connection= new PDO("mysql:host".$host.";dbname=".$baseDatos,$user,$password);

    //En casp de haber error, lanza una excepcion para la dicha notifiacion
    $connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
?>
</body>
</html>