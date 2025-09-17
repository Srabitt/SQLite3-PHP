<?php

$ch = curl_init('http://localhost:8000/logica/mostrarUsuarios.php');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$resultado=curl_exec($ch);
$data = json_decode($resultado,true);
curl_close($ch);

var_dump($data);
exit();
?>