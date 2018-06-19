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

  public static function UserInsert($connection, $user){
    $inserted = false;
    $nametmp = $user -> getName();
    $emailtmp = $user -> getEmail();
    $passwordtmp = $user -> getPassword();

    if(isset($connection)){
      try {
        $sql = "INSERT INTO users (name, email, passw, date_sign, active) VALUES(:name, :email, :passw, NOW(), 0)"; /*  : alias*/
        $sentence = $connection -> prepare($sql);


        $sentence -> bindParam(':name', $nametmp, PDO::PARAM_STR);
        $sentence -> bindParam(':email', $emailtmp, PDO::PARAM_STR);
        $sentence -> bindParam(':passw', $passwordtmp , PDO::PARAM_STR);
        $inserted = $sentence -> execute();

      } catch (PDOException $e) {
        print 'Error' . $e -> getMessage();
      }
    }
    return $inserted;
  }

  public static function ifNameExists($connection, $name){

    $exists = true;

    if(isset($connection)){
      try {
        $sql = 'SELECT * FROM users WHERE name = :name ';
        $sentence = $connection -> prepare($sql);
        $sentence -> bindParam(':name', $name, PDO::PARAM_STR);
        $sentence -> execute();
        $result = $sentence -> fetchAll();

        if(count($result)){
          $exists = true;
        }else{
          $exists = false;
        }

      } catch (PDOException $e) {
        print 'ERROR' .$e -> getMessage();
      }
    }
    return $exists;
  }

  public static function ifEmailExists($connection, $email){

    $exists = true;

    if(isset($connection)){
      try {
        $sql = 'SELECT * FROM users WHERE email = :email ';
        $sentence = $connection -> prepare($sql);
        $sentence -> bindParam(':email', $email, PDO::PARAM_STR);
        $sentence -> execute();
        $result = $sentence -> fetchAll();

        if(count($result)){
          $exists = true;
        }else{
          $exists = false;
        }

      } catch (PDOException $e) {
        print 'ERROR' .$e -> getMessage();
      }
    }
    return $exists;
  }









}
