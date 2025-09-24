<?php

$idUsuario= $_GET['id'];

echo $idUsuario;
$db = new SQLite3('../DB/DB_USER.db');
$db->query("DELETE FROM user WHERE id=$idUsuario");

header('Location: '.'/');
exit(); 
?>
