<?php
class Redirect{

  public static function redirection($url){
    header('Location: ' . $url, true, 301);
    exit();
  }
}
