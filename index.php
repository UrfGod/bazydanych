<?php


$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root';
$dbname = 'artykuly';
$connect = mysql_connect($dbhost,$dbuser,$dbpass);
mysql_select_db($dbname,$connect);

?>

<form action="GET">
<input type="text" name="autor">
<input type="text" name="kontent">
<input type="sumbit" name="dodaj do bazy danych">
</form>




