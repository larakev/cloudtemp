<?php

	header('Content-Type: text/html; charset=ISO-8859-1');
	include('../assets/config/conexion.php');

		$id = $_POST['id'];
		$usuario = $_POST['usuario'];
		$nombre = $_POST['nombre'];
		$apellidos = $_POST['apellidos'];
		$email = $_POST['email'];
		$telefono = $_POST['telefono'];
		$password = $_POST['password'];
		
		$password = sha1(md5($password));
			
		$reg = mysql_query("UPDATE usuarios SET usuario='$usuario', email='$email', nombre='$nombre', apellidos='$apellidos', telefono='$telefono', password='$password' WHERE id='$id'")or die(mysql_error()); 

		if($reg) {
			print "<script>alert(\"Usuario modificado.\");window.location='../web/lista-usuarios.php';</script>";
		}else {
			print "<script>alert(\"Ha ocurido un error\");window.location='../web/lista-usuarios.php';</script>";
		}
			
		
?>