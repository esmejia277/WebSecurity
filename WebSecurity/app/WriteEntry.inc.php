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
            <div class="text-justify">
            <?php
              echo nl2br(self :: shortenText($entry -> getText()));
             ?>
            </div>
            <br>
            <br>
            <div class="text-right">
              <a class="btn btn-primary" href="<?php echo entry . '/'.$entry -> getURL()?> " role="button">Leer más</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  }

  public function shortenText($text){
    $long = 400;
    $result = '';
    if(strlen($text) >= $long){
      $result = substr($text, 0 , $long);
      $result .= '...';
    }else{
      $result = $text;
    }
    return $result;
  }
}
