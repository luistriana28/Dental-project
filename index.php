<!DOCTYPE html>
<html lang="es" >
    <head>
        <title>Dental Torreon</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
        <link rel="stylesheet" type="text/css" href="Estilos/EstilosLogin.css">
        <meta charset="UTF-8">
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
                        <li><a href="PHP/NewUser.php"><span class="glyphicon glyphicon-user"></span>Registrarte</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
                <div class="panel panel-info" >
                    <div class="panel-heading">
                        <div class="panel-title">Sign In</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>
                    <div style="padding-top:30px" class="panel-body" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                        
                        <form class="form-horizontal" action="PHP/accionLogin.php" method="post">
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-username" type="text" class="form-control" name="user" value="" placeholder="username">
                            </div>
                            
                            <div style="margin-bottom: 25px" class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="login-password" type="password" class="form-control" name="pass" placeholder="password" required="">
                            </div>
                            <div style="margin-top:10px" class="form-group">
                                <!-- Button -->
                                <div class="col-sm-12 controls">
                                    <button id="btn-login" type="submit" class="btn btn-success">Login</button>
                                </div>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </html>