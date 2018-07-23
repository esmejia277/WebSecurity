<?php

include_once 'app/Config.inc.php';
include_once 'app/Connection.inc.php';
include_once 'app/Entry.inc.php';

class RepoEntry{

  public static function EntryInsert($connection, $entry){
    $insert_entry = false;
    $author_id_tmp = $entry ->  getAuthor_ID();
    $url_tmp = $entry -> getURL();
    $title_tmp = $entry -> getTitle();
    $text_tmp = $entry -> getText();

    if(isset($connection)){
      try {
        $sql = "INSERT INTO entries (author_id, url,  title, text, date, active) VALUES(:author_id, :url, :title, :text, NOW(), 0)"; /*  : alias*/
        $sentence = $connection -> prepare($sql);
        $sentence -> bindParam(':author_id', $author_id_tmp, PDO::PARAM_STR);
        $sentence -> bindParam(':url', $url_tmp, PDO::PARAM_STR);
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
              $row['url'],
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

  public static function getEntryURL($connection, $url){
    $entry = null;

    if(isset($connection)){
      try {
        $sql = "SELECT * FROM entries WHERE url LIKE :url";
        $sentence = $connection -> prepare($sql);
        $sentence -> bindParam(':url', $url, PDO::PARAM_STR);
        $sentence -> execute();
        $result = $sentence -> fetch();

        if(!empty($result)){
          $entry = new Entry(
            $result['id'],
            $result['author_id'],
            $result['url'],
            $result['title'],
            $result['text'],
            $result['date'],
            $result['active']
          );
        }

      } catch (PDOException $e) {
        print $e -> getMessage();
      }
    }
    return $entry;
  }

  public static function getRandomEntries($connection, $limit){
    $entries = [];
    if (isset($connection)) {
      try {
        $sql = "SELECT * FROM entries ORDER BY RAND() LIMIT $limit" ;
        $sentence = $connection -> prepare($sql);
        $sentence -> execute();
        $result = $sentence -> fetchAll();

        if(count($result)){
          foreach ($result as $row) {
            $entries[] = new Entry(
              $row['id'],
              $row['author_id'],
              $row['url'],
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
