<?php
$db = new SQLite3('DB_USER.db');

$db->query("DELETE FROM user WHERE id=1");
?>