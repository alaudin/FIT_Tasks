<?php
$host='localhost';
$host_user="root";
$host_passw="yamaha";
$database="googledb";

$conn_link=  mysql_connect($host, $host_user, $host_passw);

mysql_select_db($database);
?>
