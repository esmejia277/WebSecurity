<?php
include_once 'app/WriteEntry.inc.php';
 ?>
<div class="row">
  <div class="col-md-12">
    <hr>
    <h3>Otras entradas</h3>
    <br>
  </div>
  <?php

  for ($i=0; $i < count($random_entries);  $i++) {
    $actual = $random_entries[$i];

  ?>

  <div class="col-md-4">
    <div class="card item">
      <div class="card-header">
        <?php echo  $actual -> getTitle(); ?>
      </div>
      <div class="card-body">
        <p>
          <?php
            echo WriteEntry::shortenText(nl2br($actual -> getText()));
          ?>
        </p>
      </div>
    </div>
  </div>
  <?php
    }
  ?>
  <div class="col-md-12">
    <hr>
  </div>
</div>
