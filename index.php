<?php

session_set_cookie_params([
    'httponly'=>true,
    ]);
session_start();
$isLogged = isset($_SESSION['logged_in']);
if ($isLogged) {
    header('Location: '.'./perfil.php');
    exit();
}
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Login</title>
</head>
<body>
    <!-- Debemos de renderizar aqui -->
    <!-- <h1>Login simple.</h1> -->
    <?php require_once('./layouts/registro-usuario.php')?>
    <?php require_once('./layouts/login-usuario.php')?>
</body>
</html>
                  