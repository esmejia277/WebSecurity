<?php

include_once 'app/RepoEntry.inc.php';
include_once 'app/Entry.inc.php';

class WriteEntry{

  public static function writeEntries(){

    $entries = RepoEntry :: getAllDate(Connection :: getConnection()); //array

    if(count($entries)){
      foreach ($entries as $entry) {
        self::setEntry($entry);
      }
    }
  }

  public static function setEntry($entry){
    if(!isset($entry)){
      return;
    }
    ?>
    <div class="row">
      <div class="col-md-12">
        <div class="card item">
          <div class="card-header">
            <?php
              echo $entry -> getTitle();
             ?>
          </div>
          <div class="card-body">
            <p>
              <strong>
                <?php
                echo $entry -> getDate();
                 ?>
              </strong>
            </p>
            <?php
              echo nl2br($entry -> getText());
             ?>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
}
