<?php
include_once 'app/Config.inc.php';
include_once 'app/Connection.inc.php';
include_once 'app/RepoUser.inc.php';

if(isset($_GET['name']) && !empty($_GET['name'])){
  $name = $_GET['name'];
}else {
  Redirect :: redirection(server);
}

$title = 'Bienvenido';
include_once 'views/open_html.inc.php';
include_once 'views/navbar.inc.php';
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
<?php include_once 'views/close_html.inc.php';?>
