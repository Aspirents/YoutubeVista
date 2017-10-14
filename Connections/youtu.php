<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_youtu = "localhost";
$database_youtu = "youtuvista";
$username_youtu = "root";
$password_youtu = "";
$youtu = mysql_pconnect($hostname_youtu, $username_youtu, $password_youtu) or trigger_error(mysql_error(),E_USER_ERROR); 
?>