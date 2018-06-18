<?php
include_once 'app/Connection.inc.php';
include_once 'app/RepoUser.php';
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
              <form role = "form">
                <div class="form-group">
                  <label for="form-text">Nombre de usuario</label>
                  <input id="form-text" type="text" class="form-control">
                </div>
                <div class="form-group">
                  <label for="form-email">Email</label>
                  <input id="form-email" type="email" class="form-control">
                </div>
                <div class="form-group">
                  <label for="form-passw">Contraseña</label>
                  <input id="form-passw" type="password" class="form-control">
                </div>
                <div class="form-group">
                  <label for="form-passwd2">Repite la contraseña</label>
                  <input id="form-passwd2" type="password" class="form-control">
                </div>
                <br>
                <div class="text-center">
                  <button class="btn btn-default btn-primary" type="submit">Registrarse</button>
                  <button class="btn btn-default btn-primary" type="reset">Limpiar</button>
                </div>
                <br>
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
