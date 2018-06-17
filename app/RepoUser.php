<?php

/* Querys */

class RepoUser{

  public static function getAll($connection){
    $users = array();
    if(isset($connection)){
      try {
        include_once 'User.inc.php';
        $sql = "SELECT * FROM users";
        $sentence = $connection -> prepare($sql);
        $sentence -> execute();
        $result = $sentence -> fetchAll();
        if(count($result)){
          foreach ($result as $row) {
            $users[] = new User(
              $row['id'],  $row['name'], $row['email'], $row['passw'], $row['date_sign'], $row['active']
            );
          }
        }else{
          print 'NO users found';
        }

      } catch (PDOException $ex) {
        print "ERROR" .$ex ->getMessage();

      }
    }else{
      print 'Error, not started connection';
    }
    return $users;
  }
}
