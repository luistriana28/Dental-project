<html>
    <head>
        <title>Nuevo usuario</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
        <script src="../bootstrap/query/jquery.min.js"></script>
        <script src="../bootstrap/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../Estilos/estilopagina.css">
    </head>
    <body>
        <nav class="navbar navbar-default fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Dental Torreon</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Inicio</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php
                        session_start();
                        if(isset($_SESSION['user']))
                        {
                        echo "<li><a href='../index.php'><span class='glyphicon glyphicon-user'></span>Cerrar Sesion</a></li>";
                        }
                        else{
                        echo "<li><a href='../index.php'><span class='glyphicon glyphicon-user'></span>Login</a></li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="row">
            <div class="col-xs-offset-4 col-xs-4 col-xs-offset-4">
                    <form class="form-horizontal" action='' method="POST">
                        <fieldset style="text-align: center;">
                            <div id="legend">
                                <legend class="">Register</legend>
                            </div>
                            <div class="control-group">
                                <!-- Username -->
                                <label class="control-label"  for="username">Username</label>
                                <div class="controls">
                                    <input type="text" id="username" name="user" placeholder="" class="input-xlarge">
                                    <p class="help-block">Usuario puede tener letras o numeros</p>
                                </div>
                            </div>
                            <div class="control-group">
                                <!-- Password-->
                                <label class="control-label" for="password">Password</label>
                                <div class="controls">
                                    <input type="password" id="password" name="password" placeholder="" class="input-xlarge" required>
                                    <p class="help-block">Password debe tener minimo 4 caracteres</p>
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <!-- Password -->
                                <label class="control-label"  for="password_confirm">Password (Confirm)</label>
                                <div class="controls">
                                    <input type="password" id="password_confirm" name="cpassword" placeholder="" class="input-xlarge" required>
                                    <p class="help-block">Confirmar Password</p>
                                </div>
                            </div>
                            
                            <div class="control-group">
                                <!-- Button -->
                                <div class="controls">
                                    <button class="btn btn-success">Registrar</button>
                                </div>
                            </div>
                        </fieldset>
                    </form>
                    
                </div>
            </div>
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
            <center><img src="../img/dientelimpio.png"/><br />
        </body>
    </html>