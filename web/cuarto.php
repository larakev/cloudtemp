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
    <meta http-equiv="refresh" content="5"/>
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

      $query_temp = "SELECT * FROM temperaturas  order by id desc limit 13";
      $resul_temp = mysql_query($query_temp);

      $query_current_temp = "SELECT * FROM temperaturas  order by id desc limit 1";
      $resul_current_temp = mysql_query($query_current_temp);

      $batery = mysql_query("SELECT bat FROM temperaturas  order by id desc limit 1");
      $bat = mysql_fetch_array($batery);

    ?>

    <div class="container contenedor">
      <div class="row">
        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Cuarto 1</h3>
            </div>
            <div class="flex-container panel-body">
              <ul class="flex-item lista-cuartos list-group">
                <li class="list-group-item"><strong>Encargado:</strong> Juan Pérez</li>
                <li class="list-group-item"><strong>Dimenciones:</strong> 3 x 3 x 2</li>
                <li class="list-group-item"><strong>Ubicación:</strong> Edificio A</li>
                <li class="list-group-item"><strong>Temp Máxima:</strong> 5°</li>
                <li class="list-group-item"><strong>Temp Mínima:</strong> -5°</li>
                <li class="list-group-item"><strong>Nivel de batería:</strong><?php echo $bat['bat']."%";?></li>
                <li class="histo list-group-item">
                  <span class="glyphicon glyphicon-stats" aria-hidden="true" style="color:#4CAF50;"></span>
                  <strong><a href="../web/grafico.php" class="a-panel">Gráfico</strong></a>
                </li>
              </ul>
              <div class="flex">
                <i class="flex-item icon-thermometer-half"></i>
                <div class="flex-item temp-actual-caja">
                  <center>
                    <?php while ($row=mysql_fetch_array($resul_current_temp)){ ?>
                      <h2><?php echo $row['temp']."°"?></h2>
                    <?php } ?>
                  </center>
                  <p>Temperatura Actual</p>
                </div>
              </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <table class="table">
              <thead>
                <tr>
                  <th><center>Fecha</center></th>
                  <th><center>Hora</center></th>
                  <th><center>Temperatura</center></th>
                </tr>
              </thead>
              <tbody>
                <?php while ($row=mysql_fetch_array($resul_temp)){ ?>
                <tr>
                  <td><center><?php echo $row['fecha']?></center></td>
                  <td><center><?php echo $row['hora']?></center></td>
                  <td><center><?php echo $row['temp']?></center></td>
                </tr>
              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
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
          <a class="navbar-brand" href="#">Bienvenido a Temp Monitor</a>
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