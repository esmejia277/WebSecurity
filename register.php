<?php
include_once 'app/Connection.inc.php';
include_once 'app/RepoUser.inc.php';
include_once 'app/User.inc.php';
include_once 'app/RegisterValidate.inc.php';
include_once 'app/Redirect.inc.php';

if(isset($_POST['send'])){
  Connection :: openConnection();
  $validate = new RegisterValidate($_POST['name'], $_POST['email'], $_POST['password'], $_POST['password2'], Connection::getConnection());
  if($validate -> formOK()){
    $user = new User('', $validate -> getName(),
    $validate -> getEmail(),
    password_hash($validate -> getPasswd(), PASSWORD_DEFAULT), // password encryption
     '',
     '');

    $inserted = RepoUser :: UserInsert(Connection::getConnection(), $user);
    if($inserted){
      //redirect to welcome page
      Redirect :: redirection(correct_register . '?name=' . $user -> getName());
    }
  }
  Connection :: closeConnection();
}

$title = "Registro";
include_once 'views/open_html.inc.php';
include_once 'views/navbar.inc.php';

?>
<div class="container">
  <div class="jumbotron">
    <h1 class="text-center">Formulario de registro</h1>
  </div>
</div>

<div class="container">
  <div class="row">
    <div class="col-md-6 text-center">
      <div class="card item">
        <div class="card-header">
          <h3>
          Instrucciones
          </h3>
        </div>
          <div class="card-body">
            <br>
            <p class="text-justify">Para unirte a nuestra web, introduce un nombre de usuario, tu email y una contraseña.
              El email que escribas, debe ser real para poder gestionar tu cuenta.
              Te recomendamos elegir una contraseña que contenga mayúsculas, signos y símbolos.
            </p>
            <br>
            <a href="#">¿Ya tienes una cuenta?</a>
            <br>
            <br>
            <a href="#">¿Olvidaste tu contraseña?</a>
            <br>
            <br>
          </div>
        </div>
        <br>
      </div>
      <div class="col-md-6">
        <div class="card item">
          <div class="card-header">
            <h3 class="text-center">
            Introduce tus datos
            </h3>
          </div>
            <div class="card-body">
              <form role = "form" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>">
                <?php
                if(isset($_POST['send'])){   //if the submit button is pushed
                  include_once 'views/submit_register.inc.php';
                }else {
                  include_once 'views/empty_register.inc.php';
                }
                ?>
              </form>
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<?php
include_once 'views/close_html.inc.php';
?>
