<?php
session_start();
if(isset($_SESSION['user']))
{
echo "<p align='right'><a href='index.php'>Cerrar Sesion</a></p>";
}
else
{
echo "<p align='right'><a href='loginmedicos.php'>Login</a></p>";
}
?>
<html>
    <head>
        <title>Alta Paciente</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../bootstrap/css/font-awesome.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilopagina.css">
    </head>
    <body>
        <center><h1 id="tit" >Alta Paciente</h1>
        <fieldset id="feel">
            <form method="post" action="verificaaltapacientes.php">
                <font id="letras">  <strong> Nombre: </strong></font> <input type="text" name="nombre" size="20"/><br />
                <font id="letras">  <strong> Apellido Paterno:  </strong></font> <input type="text" name="apellidoP" size="20" maxlength="30"/><br />
                <font id="letras">  <strong>Apellido Materno:  </strong></font> <input type="text" name="apellidoM" size="20" maxlength="30"/><br />
                <font id="letras"> <strong> Direccion: </strong></font> <input type="text" name="direccion" size="20" maxlength="30"/><br />
                <font id="letras"> <strong> Edad:  </strong></font> <input type="text" name="edad" size="20" maxlength="30"/><br />
                <font id="letras">  <strong>Telefono:  </strong></font><input type="text" name="telefono" size="20" maxlength="10"/><br />
                <br />
                

                <input type="submit" value="Registrar" id="input" class="btn btn-info btn-lg"/>
            </form>
        </fieldset>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <img src="img/dientelimpio.png"/><br />
        <a href="registrar.php">Regresar</a></center>
        
    </body>
</html>