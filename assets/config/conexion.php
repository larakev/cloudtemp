<?php
	include('configuracion.php');
	$host_db = $hosting;
	$usuario_db = $usuario;
	$clave_db = $contraseña;
	$nombre_db = $bdatos;
	
	error_reporting(E_COMPILE_ERROR|E_ERROR|E_CORE_ERROR);
	mysql_connect($host_db, $usuario_db, $clave_db) or die("No se encontro el servidor");
	mysql_select_db($nombre_db) or die("No se encontro la base de datos");
	mysql_set_charset('utf8');
?>