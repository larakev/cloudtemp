<?php
header('Content-Type: text/html; charset=ISO-8859-1');
include('../assets/config/conexion.php');
session_start();
if(isset($_SESSION['usuario'])) {
session_destroy();
header("Location: ../");
}else {
print "<script>alert(\"La sesión no se ha cerrado correctamente\");window.location='../';</script>";
}
?> 