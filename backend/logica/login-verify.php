<?php
session_start();
$estaLogeado = isset($_SESSION['logged_in']); // si existe un session.
$existeLogin = $_SESSION['logged_in']; //trael el true de la sesion persistente.

if(!$estaLogeado && !$existeLogin){
    header('Location: '.'/');
    exit(); 
}
?>