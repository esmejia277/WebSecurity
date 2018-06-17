<?php
include_once 'app/Connection.inc.php';
include_once 'app/RepoUser.php';

Connection::openConnection();
$total = RepoUser::getUsersNumber(Connection::getConnection());
Connection::closeConnection();

?>

<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="fontawesome-free-5.0.13/web-fonts-with-css/css/fontawesome-all.min.css">
    <title></title>
  </head>
  <body>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <div class="container">
        <a href="#" class="navbar-brand">Security!</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsed-bar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsed-bar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-list-ul"></i>
                Entradas</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-star"></i>
                Favoritos
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-book"></i>
                Autores
              </a>
            </li>
          </ul>
          <ul class="navbar-nav ml-auto">

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-user" aria-j></i>
                <?php echo $total; ?>
              </a>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-sign-in-alt"></i>
                Iniciar sesión
              </a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="fas fa-user-plus"></i>
                Registro
              </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container">
      <div class="jumbotron">
        <h1>Seguridad Informática</h1>
        <p>Dedicado a los amantes de la programación y la seguridad de la información.</p>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <div class="card item">
                <div class="card-header">
                  <h5>
                  <i class="fab fa-sistrix"></i> Busqueda
                  </h5>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <input type="search" class="form-control" placeholder="¿Qué deseas encontrar?">
                  </div>
                  <button type="button" class="form-control">Buscar</button>
                </div>
              </div>
            </div>
          </div><br>
          <div class="row">
            <div class="col-md-12">
              <div class="card item">
                <div class="card-header">
                  <h5>
                    <i class="fas fa-filter"></i> Filtro
                  </h5>
                </div>
                <div class="card-body ">
                  <p>...</p>
                </div>
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="col-md-12">
              <div class="card item">
                <div class="card-header">
                  <h5>
                    <i class="far fa-calendar-alt"></i> Archivo
                  </h5>
                </div>
                <div class="card-body">
                  <p>...</p>

                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-8">

          <div class="card item">
            <div class="card-header">
              <h5>
                <i class="far fa-newspaper"></i> Últimas entradas
              </h5>
            </div>
            <div class="card-body">


              <p>No hay entradas aún</p>


            </div>
          </div>
        </div>

      </div>
    </div>





    <script src="js/jquery-3.3.1.min.js"> </script>
    <script src="js/bootstrap.min.js"> </script>
  </body>
</html>
