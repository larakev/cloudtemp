<?php

header('Content-Type: text/html; charset=ISO-8859-1');
include('../assets/config/conexion.php');

	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$encargado = $_POST['encargado'];
	$dimenciones = $_POST['dimenciones'];
	$ubicacion = $_POST['ubicacion'];
	$tempmaxima = $_POST['tempmaxima'];
	$tempminima = $_POST['tempminima'];
	$descripcion = $_POST['descripcion'];

	$reg = mysql_query("UPDATE cuartos SET nombre='$nombre', encargado='$encargado', dimenciones='$dimenciones', ubicacion='$ubicacion', tempmaxima='$tempmaxima', tempminima='$tempminima', descripcion='$descripcion' WHERE id='$id'")or die(mysql_error());
	if($reg) {
		print "<script>alert(\"Cuarto modificado exitosamente.\");window.location='../web/lista-cuartos.php';</script>";
	}else {
		print "<script>alert(\"Ha ocurido un error\");window.location='../';</script>";
	}
	
?>