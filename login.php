<?php
include_once 'app/config.inc.php';
include_once 'app/Connection.inc.php';
include_once 'app/RepoUser.inc.php';
$title = "Login";
include_once 'views/open_html.inc.php';
include_once 'views/navbar.inc.php';

?>

<div class="container">
  <div class="row">

    <div class="col-md-6 offset-md-3">
      <div class="card item margin-card">
        <div class="card-header text center">
          <h4 class="text-center">Iniciar sesión</h4>
        </div>
        <div class="card-body ">
          <form role = "form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
            <h2 class="text-center">Introduce tus datos</h2>
            <br>
            <label for="email" class="sr-only">Email</label> <!-- invident -->
            <input type="email" id = "email" name="email-login" placeholder="email..." class="form-control">
            <br>
            <label for="password" class="sr-only">Contraseña</label> <!-- invident -->
            <input type="password" id = "password" name="password-login" placeholder="contraseña..." class="form-control">
            <br>
            <button class="btn btn-lg btn-primary btn-block" type="submit" name="login">Iniciar sesión</button>
          </form>
          <br>
          <br>
          <div class="text-center">
            <a href="#">¿Olvidaste tu contraseña?</a>

          </div>

        </div>

      </div>
    </div>
  </div>
</div>















<?php include_once 'views/close_html.inc.php'; ?>
