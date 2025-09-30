<?php
$usuario = $_POST['usuario'];
$id = $_POST['id'];
$password = $_POST['password-new'];
$query="UPDATE user SET user = '$usuario' WHERE id = $id";
// var_dump($_POST); //recibe 4 valores.

if($_POST['password-new'] !== ""){
    $password_hashed = password_hash($password,PASSWORD_BCRYPT);
    $igual_password = ($_POST['password-new'] === $_POST['password-confirm']);
    $query=($igual_password)
            ?"UPDATE user SET user = '$usuario',password_user ='$password_hashed' WHERE id = $id"
            :"UPDATE user SET user = '$usuario' WHERE id = $id";
}
echo $query;

try {
    $db = new SQLite3('../DB/DB_USER.db');
    $db->exec($query);
    $db->close();
    header('Location: '.'/?contenido=perfil');
    exit();


} catch (Error $th) {
    throw $th;
    exit();
}


?>