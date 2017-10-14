<?php 
include("parametro.php");

mysql_query("INSERT INTO `perfil` (`nombre`, `apellido`) VALUES ('212', '212')");

mysql_query("INSERT INTO `perfil` (`nombre`, `apellido`) VALUES ('W', 'WE')");
mysql_query("INSERT INTO `usuario`( `clave`, `clave2`, `correo`) VALUES('$_GET[clave]','$_GET[clave2]','$_GET[correo]') ");

header('location: registro.php');
 ?>