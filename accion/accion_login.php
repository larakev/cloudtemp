<?php
header('Content-Type: text/html; charset=ISO-8859-1');
include('../assets/config/conexion.php');
session_start();
$usuario = mysql_real_escape_string($_POST['usuario']);
$password = mysql_real_escape_string($_POST['password']);
$password = sha1(md5($password));
$sql = mysql_query("SELECT id, usuario, nombre, usuario FROM usuarios WHERE usuario='".$usuario."' AND password='".$password."'");
if($row = mysql_fetch_array($sql)) {
$_SESSION['id'] = $row['id'];
$_SESSION['usuario'] = $row['usuario'];
$_SESSION['nombre'] = $row['nombre'];
$_SESSION['apellidos'] = $row['apellidos'];
 print "<script>;window.location='../';</script>";
}else {
print "<script>alert(\"Algo ha salido mal porfavor intenta iniciar sesión de nuevo\");window.location='../';</script>";
}
?>
