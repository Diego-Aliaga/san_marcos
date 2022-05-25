<?php
// datos para la conexion a mysql
define('DB_SERVER','');

$con = mysql_connect(DB_SERVER,DB_USER,DB_PASS);
mysql_select_db(DB_NAME,$con);
?>
