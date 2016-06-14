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
    <link href="../assets/css/bootstrap.css" rel="stylesheet">
    <link href="../assets/css/custom.css" rel="stylesheet">
    <link href="../assets/css/bugi10.css" rel="stylesheet">
    <link href="../assets/css/index.css" rel="stylesheet">
    <script src="../assets/js/jquery-2.2.4.min.js"></script>
    <script src="../assets/js/bugi8.js"></script>
    <script src="../assets/js/bugi10.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
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
    <div class="container contenedor">
      <div class="row">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="panel-title">Añadir Nuevo Cuarto</h3>
          </div>
          <div class="panel-body">
            <form method="post" action="../accion/accion_nuevocuarto.php">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="NombreCuarto">Nombre del Cuarto:</label>
                    <input type="text" name="nombre" class="form-control" id="NombreCuarto" required autofocus>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="Encargado">Encargado:</label>
                    <input type="text" name="encargado" class="form-control" id="Encargado" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="Dimenciones">Dimenciones:</label>
                    <input type="text" name="dimenciones" class="form-control" id="Dimenciones" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="Ubicacion">Ubicación:</label>
                    <input type="text" name="ubicacion" class="form-control" id="Ubicacion" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="TempMaxima">Temperatura Maxima:</label>
                    <input type="text" name="tempmaxima" class="form-control" id="TempMaxima" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="TempMinima">Temperatura Mínima:</label>
                    <input type="text" name="tempminima" class="form-control" id="TempMinima" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <label for="Descripcion">Descripción del Cuarto:</label>
                  <textarea class="form-control" name="descripcion" id ="Descripcion"></textarea>
                  <button type="submit" name="enviar" class="submit btn btn-primary">Añadir</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
      <hr>
    <footer>
      <p>&copy; 2016 Cloud Temp, Inc.</p>
    </footer>
    </div>
  </body>
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