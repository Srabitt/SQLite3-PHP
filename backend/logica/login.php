<?php
//Capturar las credenciales (user, password) $_POST
// var_dump($_POST);
$user = $_POST['usuario'];
$query_user = "SELECT user  FROM user WHERE user = '$user'";
$query_password = "SELECT password_user  FROM user WHERE user = '$user'";
// // $user = $_POST['usuario'];

//Consulta.
$db = new SQLite3('../DB/DB_USER.db');
$result_user = $db->querySingle($query_user);
$result_password = $db->querySingle($query_password);
$db->close();

$existeUsuario = ($result_user!==0)?true:false;
// $isCorrectPassword = ($_POST['password'] === $result_password)?true:false;
$isCorrectPassword = password_verify($_POST['password'],$result_password); //cuando haya hash

if($existeUsuario && $isCorrectPassword){
    //REALIZE LA PERMANENCIA DE UN LOGIN.
    session_set_cookie_params([
    // 'lifetime'=>60,
    'httponly'=>true,
    ]);
    session_start();
    $_SESSION['usuario'] = $result_user;
    $_SESSION['logged_in'] = true;
    $_SESSION['contenido'] = 'perfil';
    echo 'Login exitoso.';
    header('Location: '.'/');
    exit();

}else{
    header('Location: '.'/?error=credenciales');
    exit();
}  
?>