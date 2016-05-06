<?php

//membangun koneksi
$host = "localhost";
$user = "root";
$pass = "";
$db = "ppm";
mysql_connect($host, $user, $pass) or die (mysql_error());
mysql_select_db($db) or die (mysql_error());

?>