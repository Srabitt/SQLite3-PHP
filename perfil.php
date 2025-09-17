<?php
session_start();
$estaLogeado = isset($_SESSION['logged_in']); // si existe un session.
$existeLogin = $_SESSION['logged_in']; //trael el true de la sesion persistente.

if(!$estaLogeado && !$existeLogin){
    header('Location: '.'/');
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil</title>
</head>
<body>
    <h1>Perfil del usuario</h1>
    <?=$_SESSION['usuario']?>
    <a href="./logica/logout.php">Salir de seccion.</a>
    <form action="" method="get">
        <input type="text">
    </form>
</body>
</html>