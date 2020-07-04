<meta charset="utf-8" />
<?php
$db=mysql_connect("localhost","user","password"); //соединяемся с базой
mysql_select_db ("database", $db); // выбираем бд

//устанавыливаем кодировку базе
mysql_query("SET NAMES 'utf8' ");
mysql_query("SET CHARACTER SET 'UTF8' ");
mysql_query("SET SESSINON collation_connection='utf8_general_ci';");
 ?>