<?php

include_once 'app/Config.inc.php';
include_once 'app/Connection.inc.php';
include_once 'app/Entry.inc.php';

class RepoEntry{

  public static function EntryInsert($connection, $entry){
    $insert_entry = false;
    $author_id_tmp = $entry ->  getAuthor_ID();
    $title_tmp = $entry -> getTitle();
    $text_tmp = $entry -> getText();

    if(isset($connection)){
      try {
        $sql = "INSERT INTO entries (author_id, title, text, date, active) VALUES(:author_id, :title, :text, NOW(), 0)"; /*  : alias*/
        $sentence = $connection -> prepare($sql);
        $sentence -> bindParam(':author_id', $author_id_tmp, PDO::PARAM_STR);
        $sentence -> bindParam(':title', $title_tmp, PDO::PARAM_STR);
        $sentence -> bindParam(':text', $text_tmp , PDO::PARAM_STR);
        $insert_entry = $sentence -> execute();
      } catch (PDOException $e) {
        print 'Error' . $e -> getMessage();
      }
    }
    return $insert_entry;
  }

  public static function getAllDate($connection){
    $entries = [];
    if(isset($connection)){
      try {
        $sql = "SELECT * FROM entries ORDER BY date DESC";
        $sentence = $connection -> prepare($sql);
        $sentence -> execute();
        $result = $sentence -> fetchAll(); //array retrieve

        if(count($result)){
          foreach ($result as $row) {
            $entries[] = new Entry(
              $row['id'],
              $row['author_id'],
              $row['title'],
              $row['text'],
              $row['date'],
              $row['active']
            );
          }
        }
      } catch (PDOException $e) {
        print 'ERROR' . $e -> getMessage();
      }
    }
    return $entries;
  }
}
