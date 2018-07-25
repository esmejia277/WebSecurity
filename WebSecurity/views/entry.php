<?php

include_once 'app/Config.inc.php';
include_once 'app/Connection.inc.php';

include_once 'app/User.inc.php';
include_once 'app/Entry.inc.php';
include_once 'app/Comment.inc.php';

include_once 'app/RepoUser.inc.php';
include_once 'app/RepoEntry.inc.php';
include_once 'app/RepoComment.inc.php';

$title = $entry -> getTitle();

include_once 'templates/open_html.inc.php';
include_once 'templates/navbar.inc.php';
?>

<div class="container-article">
  <div class="row">
    <div class="col-md-12">
      <h1><?php echo $entry -> getTitle(); ?></h1>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <p>

        <i class="fas fa-user-edit"></i>
        Autor
        <a href="#">
          <?php echo $author -> getName(); ?>
        </a>
        <br>
         <i class="far fa-calendar-alt"></i>
        Fecha
        <?php echo $entry -> getDate(); ?>
      </p>
    </div>
  </div>
  <br>
  <div class="row">
    <div class="col-md-12">
      <article class = "text-justify">
        <?php echo nl2br($entry ->getText()); ?>
      </article>
    </div>
  </div>
  <?php
  include_once 'templates/randomEntries.inc.php';
   ?>
  <br>
  <?php //var comments on memory, we can see it
  if(count($comments) > 0){
    include_once 'templates/comments.inc.php';
  } else{
    echo '<p>No hay comentarios</p>';
  }
   ?>
</div>
<br>

<?php
include_once 'templates/close_html.inc.php';
 ?>
