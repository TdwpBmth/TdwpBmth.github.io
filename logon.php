<?php
session_start();

if(isset($_SESSION['usuario'])) {
    header('Location: index.php');
}

$connection = mysqli_connect('34.239.138.200', 'root', 'P+6=3lQ7TnQ_', 'prestolunch');

if ($connection->connect_errno) {
    header('Location: login.php');
    } else {
    $usuario = $_POST['nomUsuario'];
    $password = $_POST['password'];

    $sql = 'SELECT * FROM usuarios WHERE nomUsuario = "' . $usuario . '" AND password = "' . $password . '"';
    $result = $connection->query($sql);
    
    if ($result->num_rows) {
        $_SESSION['usuario'] = $usuario;
        header('Location: index.php');
    } else {
        header('Location: login.php');
    }
}
?>