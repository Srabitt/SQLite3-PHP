<?php
$user=$_POST['usuario'];
$password=$_POST['password'];
$password_repit=$_POST['password-repit'];

// var_dump($_POST)
// Validar si las 2 contraseñas son identicas.
if($password===$password_repit){
    $password_hashed = password_hash($password,PASSWORD_BCRYPT);
    $db = new SQLite3('../DB/DB_USER.db');
    //Saber si el la tabla USER existe.
    $result= $db->query('SELECT "name"as nameTable FROM sqlite_sequence')->fetchArray(2);
    if($result[0] !== 'user'){
        //CREA LA TABLA
    }
    $query = "INSERT INTO user (user,password_user) VALUES ('$user','$password_hashed')";
    $db->exec($query);
    $db->close();

    //CREA LA SESSION DE LOGIN
    session_set_cookie_params([
    'httponly'=>true,
    ]);
    session_start();
    $_SESSION['usuario'] = $user;
    $_SESSION['logged_in'] = true;
    $_SESSION['contenido'] = 'perfil';
}else{
    header('Location: '.'/');
    exit();
}
header('Location: '.'/');
exit();


?>