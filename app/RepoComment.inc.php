<?php
include_once 'app/Config.inc.php';
include_once 'app/Connection.inc.php';
include_once 'app/Comment.inc.php';

class RepoComment{

  public static function CommentInsert($connection, $comment){
    $insert_comment = false;
    $author_id_tmp = $comment ->  getAuthor_ID();
    $entry_id_tmp = $comment -> getEntryID();
    $title_tmp = $comment -> getTitle();
    $text_tmp = $comment -> getText();

    if(isset($connection)){
      try {
        $sql = "INSERT INTO comments (author_id, entry_id, title, text, date) VALUES(:author_id, :entry_id, :title, :text, NOW())"; /*  : alias*/
        $sentence = $connection -> prepare($sql);
        $sentence -> bindParam(':author_id', $author_id_tmp, PDO::PARAM_STR);
        $sentence -> bindParam(':entry_id', $entry_id_tmp, PDO::PARAM_STR);
        $sentence -> bindParam(':title', $title_tmp, PDO::PARAM_STR);
        $sentence -> bindParam(':text', $text_tmp , PDO::PARAM_STR);
        $insert_comment = $sentence -> execute();
      } catch (PDOException $e) {
        print 'Error' . $e -> getMessage();
      }
    }
    return $insert_comment;
  }
}
