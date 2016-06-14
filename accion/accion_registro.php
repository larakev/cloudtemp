<?php
	header('Content-Type: text/html; charset=ISO-8859-1');
	include('../assets/config/conexion.php');
		if(isset($_POST['enviar'])) {
			$usuario = mysql_real_escape_string($_POST['usuario']);
			$nombre = mysql_real_escape_string($_POST['nombre']);
			$apellidos = mysql_real_escape_string($_POST['apellidos']);
			$email = mysql_real_escape_string($_POST['email']);
			$telefono = mysql_real_escape_string($_POST['telefono']);
			$password = mysql_real_escape_string($_POST['password']);
			$sql = mysql_query("SELECT usuario FROM usuario WHERE usuario='".$usuario."' or email='".$email."'");
			
			if(mysql_num_rows($sql) > 0) {
				print "<script>alert(\"El usuario o correo electronico ya esta en uso\");window.location='../';</script>";
			}else {
				$password = sha1(md5($password));
				$reg = mysql_query("INSERT INTO usuarios (usuario, nombre, apellidos, email, telefono, password) 
					VALUES ('".$usuario."', '".$nombre."', '".$apellidos."', '".$email."', '".$telefono."', '".$password."')")or die(mysql_error()); 
			if($reg) {
				print "<script>alert(\"Usuario registrado.\");window.location='../';</script>";
			}else {
				print "<script>alert(\"Ha ocurido un error\");window.location='../';</script>";
			}
			}
		}else {}
?>