<?php
//Logica para enciar los usuarios.
$data = array();

//Query para la consulta a la DB
$query = "SELECT * FROM user";


//Consulta de la DB
$db = new SQLite3('../DB/DB_USER.db');
$result = $db->query($query);


while($res = $result->fetchArray(1)){
    array_push($data,$res);
}
$json = json_encode($data,128);
// var_dump($data);
header('Content-Type: application/json'); 
header("Access-Control-Allow-Origin: *");
echo $json;

?>
