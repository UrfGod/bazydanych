<?php


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'artykuly';
$connect = mysql_connect($dbhost, $dbuser,$dbpass);
mysql_select_db($dbname,$connect);






?>
