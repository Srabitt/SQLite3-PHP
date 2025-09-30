<?php
session_start();
$_SESSION['contenido'] = 'inicio';
unset($_SESSION['logged_in']);
unset($_SESSION['usuario']);



header('Location: '.'/');
exit(); 

?>