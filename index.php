<html>
    <head>
        <title>Dental Torreón</title>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <script src="bootstrap/query/jquery.min.js"></script>
        <script src="bootstrap/js/bootstrap.min.js"></script>
    </head>
    <body>
        <center><h1 id="Titulo">DENTAL TORREÓN </h1></center>
        <center>
        <div id="diente" >
            <br /><br /><br />
            <fieldset id="feel">
                <form method="post" action="verificamedicos.php">
                    <span  class="form-control">Usuarios: </span><input class="form-group" type="text" name="user" /><br />
                    <span  class="form-control">Password: </span><input class="form-group" type="password" name="pass" />
                    <input type="submit" value="Entrar" id="input"/>
                </form>
            </fieldset>
        </div>
        </center>
        <style>
        body{
        background: url(img/log1.JPG);
        }
        #div2{
        width: 1000px;
        height: 40px;
        }
        #Titulo{
        color: white;
        font-family: Baskerrille Old Face;
        font-size: 62px;
        width: 593px;
        height: 83px;
        }
        #input[type=submit]:hover {
        cursor: pointer;
        background: #000040;
        color: white;
        }
        #feel{
        width: 200px;
        height: 135px;
        background: #88C4FF;
        }
        #diente{
        background: url('img/diente.png') no-repeat;
        height: 555px;
        width: 375px;
        }
        </style>
    </body>
</html>