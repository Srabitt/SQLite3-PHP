<?php
$user = readline('Ingres usuario: ');
$password = readline('Ingres contraseña: ');//hast

$db= new SQLite3('DB_USER.db');
$db->exec("INSERT INTO user (user,password_user) VALUES ('$user','$password')");


?>