<?php
class Usuario{
  private $id;
  private $name;
  private $email;
  private $passw;
  private $date_sign;
  private $active;

  public function __construct($id, $name, $email, $passw, $date_sign, $active){
    $this -> id = $id;
    $this -> name = $name;
    $this -> email = $email;
    $this -> passw = $passw;
    $this -> date_sign = $date_sign;
    $this -> active = $active;
  }
  #getters & setters
  public function getID(){
    return $this->id;
  }

  public function getName(){
    return $this->name;
  }

  public function setName($name){
    $this-> name = $name;
  }

  public function getEmail(){
    return $this -> email;
  }

  public function setEmail($email){
    $this-> email = $email;
  }

  public function getPassword(){
    return $this -> passw;
  }

  public function setPassword($passwd){
    $this-> $passwd = passwd;
  }

  public function getDate(){
    return $this -> date_sign;
  }

  public function setActive($active){
    $this -> active = $active;
  }

  public function getActive(){
    $this -> active;
  }







 ?>
