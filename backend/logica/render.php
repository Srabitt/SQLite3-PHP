<?php
session_start();
$isLogged = isset($_SESSION['logged_in']);

$contenido = (isset($_GET['contenido']))
            ? $_SESSION['contenido'] = $_GET['contenido']
            : $_SESSION['contenido'] ?? 'inicio';

function traer_contenido($contenido) {
    return match(true){
        $contenido === 'inicio' => require_once('./frontend/layouts/login-register.php'),
        $contenido === 'perfil' => require_once('./frontend/layouts/perfil.php'),
        $contenido === 'editar' => require_once('./frontend/layouts/edit-usuario.php'),
        default => "Error al trael el recurso $contenido",
    };
}
?>