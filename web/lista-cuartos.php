<?php
	session_start();
	include('../assets/config/conexion.php');
	if(isset($_SESSION['usuario'])){
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cloud Temp</title>
    <link rel="icon" type="image/png" href="img/snow-icon.png">
    <link href="../assets/icon/style.css" rel="stylesheet">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link href="../assets/css/bugi10.css" rel="stylesheet">
    <link href="../assets/css/index.css" rel="stylesheet">
  </head>
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
         <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand user1" href="../web/index.php">Bienvenido <strong><?php echo $_SESSION['usuario']?></strong></a>
        </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <a class="navbar-brand user" href="#">Bienvenido <strong><?php echo $_SESSION['usuario']?></strong></a>
              <li role="presentation" class="botones"><a href="../web/index.php">DashBoard</a></li>
              <li role="presentation" class="botones"><a href="../web/nuevo-cuarto.php">Nuevo Cuarto</a></li>
              <li role="presentation" class="botones"><a href="../web/registro.php">Nuevo Usuario</a></li>
              <li role="presentation" class="botones"><a href="../web/lista-cuartos.php">Lista de Cuartos</a></li>
              <li role="presentation" class="botones"><a href="../web/lista-usuarios.php">Lista de Usuarios</a></li>
              <a class="btn-cerrar btn btn-info" href="../accion/accion_logout.php" role="button">Cerrar Sesión &raquo;</a>
            </ul>
          </div>
      </div>
    </nav>
    <!-- Contenido Aquí -->

         <?php

      $query_cuarto = "SELECT * FROM cuartos";

      $resul_cuarto = mysql_query($query_cuarto);

    ?>
    <div class="container contenedor">
    <h3 class="titulo-tabla">Lista de Cuartos</h3>
		<table class="table">
          <thead>
            <tr>
                <th><center>N°</center></th>
                <th><center>Nombre</center></th>
                <th><center>Encargado</center></th>
                <th><center>Dimenciones</center></th>
                <th><center>Ubicación</center></th>
                <th><center>Temperatura Máxima</center></th>
                <th><center>Temperatura Mínima</center></th>
                <th><center>Opción</center></th>
            </tr>
          </thead>
          <tbody>
          	 <?php while ($row=mysql_fetch_array($resul_cuarto)){ ?>
                <tr>
                  <td><center><?php echo $row['id']?></center></td>
                  <td><center><?php echo $row['nombre']?></center></td>
                  <td><center><?php echo $row['encargado']?></center></td>
                  <td><center><?php echo $row['dimenciones']?></center></td>
                  <td><center><?php echo $row['ubicacion']?></center></td>
                  <td><center><?php echo $row['tempmaxima']?></center></td>
                  <td><center><?php echo $row['tempminima']?></center></td>
                  <td><center>
                    <a class="icono_mod btn btn-default" href="../web/modificar-cuarto.php?id=<?php echo $row['id']?>">
                      <span class="glyphicon glyphicon-pencil ico" aria-hidden="true"></span>
                    </a>
                    <a class="icono_del btn btn-default" href="../accion/accion_del_cuarto.php?id=<?php echo $row['id']?>">
                      <span class="glyphicon glyphicon-remove ico" aria-hidden="true"></span>
                    </a></center>
                  </td>
                </tr>
              <?php } ?>
          </tbody>
      	</table>
    </div>
        <div class="container">
     <hr>
      <footer>
        <p>&copy; 2016 Cloud Temp, Inc.</p>
      </footer>
    </div>
  </body>
  <script src="../assets/js/jquery-2.2.4.min.js"></script>
  <script src="../assets/js/bugi8.js"></script>
  <script src="../assets/js/bugi10.js"></script>
  <script src="../assets/js/bootstrap.js"></script>
</html>

<?php
	}else{
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cloud Temp</title>
    <link rel="icon" type="image/png" href="img/snow-icon.png">
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link href="../assets/css/bugi10.css" rel="stylesheet">
    <link href="../assets/css/signin.css" rel="stylesheet">
  </head>
  <body>
   <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <ul class="nav nav-pills">
          <a class="navbar-brand" href="#">Bienvenido a Cloud Temp</a>
        </ul>
      </div>
    </nav>
    <div class="container contenedor">
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Iniciar Sesión</h3>
          </div>
          <div class="panel-body">
            <form class="form-signin" method="post" action="../accion/accion_login.php">
              <div class="row">
                  <div class="form-group">
                    <label for="inputEmail" class="sr-only">Usuario</label>
                    <input type="text" name="usuario" id="inputEmail" class="form-control" placeholder="Usuario" required autofocus>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword" class="sr-only">Contarseña</label>
                    <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contarseña" required>
                    <center><button class="btn btn-lg btn-primary btn-block" name="enviar" type="submit">Iniciar Sesión</button></center>
                  </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
  <script src="../assets/js/jquery-2.2.4.min.js"></script>
  <script src="../assets/js/bugi8.js"></script>
  <script src="../assets/js/bugi10.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
</html>

<?php
    }
?>