<?php
$db=new SQLite3('DB_USER.db');

$result=$db->query("SELECT user FROM user");

while ( $row= $result->fetchArray(SQLITE3_ASSOC)) {
    var_dump($row);
}
$db->exec("VACUUM");
?>