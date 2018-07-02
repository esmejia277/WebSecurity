<?php

class ControlSession{

  public static function sessionStart($id, $name){
    if(session_id() == ''){ //if session is not started
      session_start();
    }
    $_SESSION['id'] = $id;
    $_SESSION['name'] = $name;
  }

  public static function sessionClose(){
    if(session_id() == ''){ //if session is not started
      session_start();
    }

    if(isset($_SESSION['id'])){ //delete data
      unset($_SESSION['id']);
    }

    if(isset($_SESSION['name'])){ //delete data
      unset($_SESSION['name']);
    }

    session_destroy();
  }

  public static function ifStartedSession(){
    if(session_id() == ''){ //if session is not started
      session_start();
    }
    if(isset($_SESSION['id']) && isset($_SESSION['name'])){ //if id and name exists
      return true;
    }else{
      return false;
    }
  }
}
