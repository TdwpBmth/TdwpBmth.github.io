<?php
session_start();

if(isset($_SESSION['usuario'])) {
    header('Location: index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <link rel="stylesheet" href="css/main.css">
</head>

<body>
    <h1>Iniciar Sesión</h1>
    <div class="login">
        <form action="logon.php" method="post">
            <input type="text" name="nomUsuario" placeholder="Usuario"><br>
            <input type="password" name="password" placeholder="Contraseña"><br>
            <input type="submit" value="Ingresar">
        </form>
        <p>¿No tienes cuenta?</p><a href="sign-in.php">Regístrate</a>
    </div>
</body>

</html>