<?php
include_once 'app/Config.inc.php';
include_once 'app/Connection.inc.php';
include_once 'app/RepoUser.inc.php';
include_once 'app/LoginValidate.inc.php';
include_once 'app/SessionControl.inc.php';
include_once 'app/Redirect.inc.php';
$title = "Login";
include_once 'templates/open_html.inc.php';
include_once 'templates/navbar.inc.php';

if(SessionControl :: ifStartedSession()){
  Redirect :: redirection(server);
}

if(isset($_POST['login'])){
  Connection :: openConnection();
  $validate = new LoginValidate($_POST['email-login'], $_POST['password-login'], Connection::getConnection());
  var_dump($validate);

  if($validate -> getError() === '' && !is_null($validate -> getUser())){ // if there's not error
    SessionControl :: sessionStart(
      $validate -> getUser() -> getID() ,
      $validate -> getUser() -> getName()
    );
    Redirect :: redirection(server);

  }else{
    echo 'fallo';
  }
  Connection :: closeConnection();
}
?>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="card item margin-card">
        <div class="card-header text center">
          <h4 class="text-center">Iniciar sesión</h4>
        </div>
        <div class="card-body ">
          <form role = "form" method="post" action="<?php echo login ?>">
            <h2 class="text-center">Introduce tus datos</h2>
            <br>
            <label for="email" class="sr-only">Email</label> <!-- invident -->
            <input type="email" id = "email" name="email-login" placeholder="email..." class="form-control" required autofocus>
            <?php if(isset($_POST['login']) && $_POST['email'] && !empty($_POST['email'])){
              echo 'value = "' . $_POST['email'] . '"';
            } ?>
            <br>
            <label for="password" class="sr-only">Contraseña</label> <!-- invident -->
            <input type="password" id = "password" name="password-login" placeholder="contraseña..." class="form-control" required>
            <br>
            <?php
            if(isset($_POST['login'])){
              $validate -> showError();
            }
            ?>
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
<?php include_once 'templates/close_html.inc.php'; ?>
