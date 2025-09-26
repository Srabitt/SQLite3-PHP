<?php

// session_set_cookie_params([
//     'httponly'=>true,
//     ]);
session_start();
$isLogged = isset($_SESSION['logged_in']);
// if ($isLogged) {
//     header('Location: '.'./perfil.php');
//     exit();
// }
// var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->

    <link rel="stylesheet" href="./frontend/style.css">
    <link rel="stylesheet" href="./frontend/style-perfi.css">
    <title>Login</title>
</head>
<body>
    <!-- NAVBAR -->
    <?php require_once('./frontend/layouts/navbar.php')?>
    <!-- CONTENIDO PRINCIPAL -->
     <!-- FUNCION PARA SABER SI ESTA LOGIN O NO -->
    <?php if ($isLogged): ?>
        <?php require_once('./frontend/layouts/perfil.php')?>
    <?php else: ?>
        <?php require_once('./frontend/layouts/login-register.php')?>
    <?php endif; ?>
    <!-- FOOTER -->
    <?php require_once('./frontend/layouts/footer.html')?>
</body>
</html>
                  