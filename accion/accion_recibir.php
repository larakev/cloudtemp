<?php
	include('../assets/config/conexion.php');

	$temperatura=$_GET['temp'];
	$bateria=$_GET['bat'];

	date_default_timezone_set("America/El_Salvador");
	
	$fecha = date("Y/m/d");
	$hora = date("h:i:s a");

	$reg = mysql_query("INSERT INTO temperaturas (fecha, hora, temp, bat) 
		VALUES ('".$fecha."', '".$hora."', '".$temperatura."', '".$bateria."')")or die(mysql_error());
?>