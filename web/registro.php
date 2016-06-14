<?php
session_start();
include('../assets/config/conexion.php');
if(isset($_SESSION['usuario'])){
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
    <script src="../assets/js/jquery-2.2.4.min.js"></script>
    <script src="../assets/js/bootstrap.js"></script>
	  <script src="../assets/js/bugi8.js"></script>
	  <script src="../assets/js/bugi10.js"></script>
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
        
          <div class="panel panel-default registro">
            <div class="panel-heading">
              <h3 class="panel-title">Nuevo Usuario</h3>
            </div>
            <div class="panel-body">
              <form class="registro" method="post" action="../accion/accion_registro.php">
                <div class="row">
                    <div class="form-group">
                      <label for="inputUsuario" class="sr-only">Usuario:</label>
                      <input type="text" name="usuario" id="inputUsuario" class="form-control" placeholder="Usuario" required autofocus>
                    </div>
                    <div class="form-group">
                      <label for="inputNombre" class="sr-only">Nombre</label>
                      <input type="text" name="nombre" id="inputNombre" class="form-control" placeholder="Nombre" required autofocus>
                    </div>
                    <div class="form-group">
                      <label for="inputApellido" class="sr-only">Apellidos</label>
                      <input type="text" name="apellidos" id="inputApellido" class="form-control" placeholder="Apellidos" required autofocus>
                    </div>
                    <div class="form-group">
                      <label for="inputTelefono" class="sr-only">Teléfono</label>
                      <input type="text" name="telefono" id="inputTelefono" class="form-control" placeholder="5555555" maxlength="8" required autofocus>
                    </div>
                     <div class="form-group">
                      <label for="inputEmail" class="sr-only">Email</label>
                      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" required autofocus>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword" class="sr-only">Contarseña</label>
                      <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Contarseña" required>
                      <center><button class="reg btn btn-lg btn-primary btn-block" name="enviar" type="submit">Registrar</button></center>
                    </div>
                </div>
              </form>
            </div>
          </div>
        
      </div>
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
  <script src="../assets/js/jquery-2.2.4.min.js"></script>
  <script src="../assets/js/bugi8.js"></script>
  <script src="../assets/js/bugi10.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
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
</html>
<?php
    }
?>