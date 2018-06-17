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

  public static function getUsersNumber($connection){

    $total = null;
    if(isset($connection)){ /*if connection exists*/
      try {
        $sql = "SELECT COUNT(*) as total FROM users";
        $sentence = $connection -> prepare($sql);  /* preare the query */
        $sentence -> execute(); /* execute the query */
        $result = $sentence -> fetch(); /* retrieve total variable */
        $total = $result['total'];

      } catch (PDOException $e) {
        print 'ERROR' . $e -> getMessage();

      }
    }
    return $total;
  }
}
