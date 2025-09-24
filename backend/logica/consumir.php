<?php
$ch = curl_init('http://login-php-sqlite.test/backend/logica/mostrarUsuarios.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$resultado=curl_exec($ch);
curl_close($ch);

$data = json_decode($resultado,true);
// exit();
?>