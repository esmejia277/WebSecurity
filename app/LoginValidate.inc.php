<?php
include_once 'app/RepoUser.inc.php';

class LoginValidate{
  private $user;
  private $error;

  public function __construct($email, $password, $connection){
    $this -> error = "";
    if(!$this -> initVar($email) || !$this -> initVar($password)){
      $this -> user = null;
      $this -> error = "Introduce tu email y contraseña";
    }else{
      $this -> user = RepoUser :: getUserEmail($connection, $email);
      if(is_null($this -> user || !password_verify($password, $this -> user -> getPassword()))){
        $this -> error = "Datos Incorrectos";
      }
    }
  }

  private function initVar($var){
    if(isset($var) && !empty($var)){ // if var is started and no empty
      return true;
    }else{
      return false;
    }
  }

  public function getUser(){
    return $this -> user;
  }

  public function getError(){
    return $this -> error;
  }

  public function showError(){
    if ($this -> error !== '') {
      echo "<br><div class ='alert-danger' role='alert'>";
      echo $this -> error;
      echo '</div> <br>';
    }
  }
}
