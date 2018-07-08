<?php
include_once 'app/SessionControl.inc.php';
include_once 'app/Config.inc.php';
Connection::openConnection();
$total = RepoUser::getUsersNumber(Connection::getConnection());
Connection::closeConnection();
?>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
<div class="container">
    <a href="<?php echo server ?>" class="navbar-brand">Security!</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsed-bar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsed-bar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="<?php echo articles ?>" class="nav-link">
            <i class="fas fa-list-ul"></i>
            Artículos</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo favorites ?>" class="nav-link">
            <i class="fas fa-star"></i>
            Favoritos
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo authors ?>" class="nav-link">
            <i class="fas fa-book"></i>
            Autores
          </a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto">
        <?php
        if(SessionControl :: ifStartedSession()){
        ?>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="far fa-user" aria-j></i>
            <?php echo ' ' . $_SESSION['name']; ?>
          </a>
        </li>

        <li class="dropdown">
          <a href="" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-clipboard"></i>
            Gestor
          </a>
          <ul class="dropdown-menu">
            <li>
              <a href="#">
                Entradas
              </a>
            </li>

            <li>
              <a href="#">
                Comentarios
              </a>
            </li>

            <li>
              <a href="#">
                Usuarios
              </a>
            </li>

            <li>
              <a href="#">
                Favoritos
              </a>
            </li>
          </ul>
        </li>

        <li class="navbar-item">
          <a class="nav-link" href="<?php echo logout; ?>">
            <i class="fas fa-times-circle"></i>
            Cerrar sesión
          </a>
        </li>

        <?php
        }else{
          ?>

          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="far fa-user" aria-j></i>
              <?php echo $total; ?>
            </a>
          </li>

          <li class="nav-item">
            <a href="<?php echo login ?>" class="nav-link">
              <i class="fas fa-sign-in-alt"></i>
              Iniciar sesión
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo register ?>" class="nav-link">
              <i class="fas fa-user-plus"></i>
              Registro
            </a>
          </li>
          <?php
        }
        ?>
      </ul>
    </div>
  </div>
</nav>
