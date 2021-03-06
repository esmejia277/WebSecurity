<?php
include_once 'app/Connection.inc.php';
include_once 'app/RepoUser.inc.php';
include_once 'app/WriteEntry.inc.php';
$title = "WebSecurity!";
include_once 'templates/open_html.inc.php';
include_once 'templates/navbar.inc.php';
?>
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
          <?php
            WriteEntry :: writeEntries();
           ?>
      </div>
    </div>
<?php include_once 'templates/close_html.inc.php'; ?>
