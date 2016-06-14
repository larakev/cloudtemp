<?php

	include('../assets/config/conexion.php');

      $id = $_GET['id'];

      $query = " DELETE FROM cuartos WHERE id = '$id'";
      $resul = mysql_query($query);

		if($resul) {
			print "<script>alert(\"Cuarto modificado exitosamente.\");window.location='../web/lista-cuartos.php';</script>";
		}else {
			print "<script>alert(\"Ha ocurido un error\");window.location='../web/lista-cuartos.php';</script>";
		}

?>