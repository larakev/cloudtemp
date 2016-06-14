<?php

header('Content-Type: text/html; charset=ISO-8859-1');
include('../assets/config/conexion.php');

if(isset($_POST['enviar'])) {
	$nombre = mysql_real_escape_string($_POST['nombre']);
	$encargado = mysql_real_escape_string($_POST['encargado']);
	$dimenciones = mysql_real_escape_string($_POST['dimenciones']);
	$ubicacion = mysql_real_escape_string($_POST['ubicacion']);
	$tempmaxima = mysql_real_escape_string($_POST['tempmaxima']);
	$tempminima = mysql_real_escape_string($_POST['tempminima']);
	$descripcion = mysql_real_escape_string($_POST['descripcion']);

	$reg = mysql_query("INSERT INTO cuartos (nombre, encargado, dimenciones, ubicacion, tempmaxima, tempminima, descripcion) 
		VALUES ('".$nombre."', '".$encargado."', '".$dimenciones."', '".$ubicacion."', '".$tempmaxima."', '".$tempminima."', '".$descripcion."')")or die(mysql_error());
	if($reg) {
		print "<script>alert(\"Cuarto registrado exitosamente.\");window.location='../';</script>";
	}else {
		print "<script>alert(\"Ha ocurido un error code\");window.location='../';</script>";
	}
	
}else {}

?>