<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/estilos2.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="./bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <title>Iniciar Sesion</title>
    <link rel="icon" type="image/png" href="./imagenes/Logo.png">
</head>
<body id="fondo">
    <div class="login-box">
        <img class="avatar" src="./imagenes/Logo.png" alt="">
        <br>
        <h2>Bienvenid@ a la familia </h2>
        <form method="POST" action="./VerifyLogin.php" id="loginfomr">
            <!-- Nombre del usuario -->
            <!-- <label for="nombreusuario"><i class="fa fa-user fa-2x" id="icons"></i></label> -->
            <span><i class="fa fa-user fa-2x" id="icons"></i></span>
            <input type="text" name="email" id="" placeholder="Nombre del usuario">
            <!-- Contraseña -->
            <!-- <label for="contraseña"><i class="fa fa-lock fa-2x" id="icons"></i></label> -->
            <br>
            <span><i class="fa fa-lock fa-2x" id="icons"></i></span>
            <input type="password" name="password" id="" placeholder="Contraseña">
            <!-- Boton de enviar -->
            <br>
            <button id="iniboton">Iniciar sesion</button>
            <!-- Enlaces -->
            <br>
            <br>
            <br>
            <a href="./Registro.php">No tienes una cuenta</a>
        </form>
    </div>

    





    <!--session_start();
					$_SESSION["User"]=$User;
					$_SESSION["ID"]= $Renglon[2];
					$_SESSION["TipeUser"]= $Renglon[3];
					$ID=$_SESSION["ID"];-->
    <script src="./bootstrap-4.5.0-dist/js/jquery-3.5.1.min.js"></script>
    <script src="./bootstrap-4.5.0-dist/js/bootstrap.min.js.map"></script>
</body>
</html>