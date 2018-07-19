<?php
include_once 'app/Config.inc.php';
include_once 'app/Connection.inc.php';
include_once 'app/RepoUser.inc.php';

$title = 'Bienvenido';
include_once 'templates/open_html.inc.php';
include_once 'templates/navbar.inc.php';
?>
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="card item margin-card">
        <div class="card-header">
          <i class="fas fa-check-circle"></i> Registro correcto
        </div>
        <div class="card-body text-center">
          <p>¡Gracias por registrarte <b><?php echo $name;?></b>!</p>
          <br>
          <p><a href="<?php echo login ?>">Inicia sesión</a> para utilizar tu cuenta.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include_once 'templates/close_html.inc.php';?>
