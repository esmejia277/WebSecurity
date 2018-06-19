<?php

class RegisterValidate{

  private $open_message;
  private $close_message;

  private $name;
  private $email;
  private $passwd;
  private $name_error;
  private $email_error;
  private $password_error;
  private $password2_error;

  public function __construct($name, $email, $password, $password2){
    $this -> open_message = "<br><div class = 'alert alert-danger' role = 'alert'>";
    $this -> close_message  = "</div>";

    $this -> name = "";
    $this -> email = "";
    $this -> password = "";

    $this -> name_error = $this -> validateName($name);
    $this -> email_error = $this -> validateEmail($email);
    $this -> password_error = $this -> validatePassword($password);
    $this -> password2_error = $this -> validatePassword2($password, $password2);

    if($this->password_error === "" && $this->password2_error == ""){
      $this -> passwd = $password;
    }
  }

  private function initVar($var){
    if(isset($var) && !empty($var)){ // if var is started and no empty
      return true;
    }else{
      return false;
    }
  }

  private function validateName($name){ // if var is not started and if it's empty
    if(!$this -> initVar($name)){
      return 'Escribe un nombre de usuario';
    }else{
      $this -> name = $name;
    }

    if(strlen($name) < 6){
      return 'El nombre debe ser mayor a 6 caracteres';
    }

    if(strlen($name) > 24){
      return 'El nombre no puede contener mas de 24 caracteres';
    }
    return "";
  }

  private function validateEmail($email){
    if(!$this -> initVar($email) ){
      return 'Debes ingresar un email';
    }else{
      $this -> email = $email;
    }
    return "";
  }

  private function validatePassword($password){
    if(!$this -> initVar($password) ){
      return 'Debes ingresar una contraseña';
    }
    return "";
  }

  private function validatePassword2($password , $password2){

    if(!$this -> initVar($password)){
      return 'Debes entrar la contraseña';
    }

    if(!$this -> initVar($password2) ){
      return 'Debes repetir la contraseña';
    }

    if ($password != $password2) {
      return 'Ambas contraseñas deben ser iguales';
    }
    return "";
  }

  //getters and setters

  public function getName(){
    return $this -> name;
  }

  public function getEmail(){
    return $this -> name;
  }

  public function getPasswd(){
    return $this -> passwd;
  }

  public function getNameError(){
    return $this -> name_error;
  }

  public function getEmailError(){
    return $this -> email_error;
  }

  public function getPasswordError(){
    return $this -> password_error;
  }

  public function getPasswordError2(){
    return $this -> password2_error;
  }

  public function showName(){
    if($this -> name == ""){
      echo 'value ="' . $this -> name . '"';
    }
  }

  public function showNameError(){
    if ($this -> name_error !== "") {
      echo $this -> open_message . $this -> name_error . $this -> close_message;
    }
  }

  public function showEmail(){
    if($this -> email_error !==""){ //if email is not empty
      echo 'value ="' . $this -> email . '"';
    }
  }

  public function showEmailError(){
    if ($this -> email_error !== "") {
      echo $this -> open_message . $this -> email_error . $this -> close_message;
    }
  }

  public function showPasswordError(){
    if ($this -> password_error !== "") {
      echo $this -> open_message . $this -> password_error . $this -> close_message;
    }
  }

  public function showPassword2Error(){
    if ($this -> password2_error !== "") {
      echo $this -> open_message . $this -> password2_error . $this -> close_message;
    }
  }

  public function formOK(){
    if ($this -> name_error === "" && $this -> email_error === "" && $this -> password_error === ""
    && $this -> password2_error=== "") {
      return true;
    }else{
      return false;
    }
  }







}
