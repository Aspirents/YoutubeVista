<?php 
$servidor="localhost";
$usuario="root";
$clave="";
$based="youtuvista";

$conexion=mysql_connect($servidor,$usuario,$clave);
mysql_select_db($based,$conexion);
if (!$conexion) {
  die('No pudo conectarse: ' . mysql_error());
}else{
	echo 'Conectado satisfactoriamente';
} 
 ?>


