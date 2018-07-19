<?php

$components = parse_url($_SERVER["REQUEST_URI"]);
$route = $components['path'];
$part = explode("/", $route); //array with url
$part = array_filter($part); //any empty string will set null
$part = array_slice($part, 0); //clean the empty slots
$route_prefered = 'views/404.php';

if($part[0] == 'WebSecurity'){
  if (count($part) == 1) {
    $route_prefered = 'views/home.php';
  }elseif (count($part) == 2) {
    switch ($part[1]) {
      case 'login':
        $route_prefered = 'views/login.php';
        break;
      case 'logout':
      $route_prefered = 'views/logout.php';
        break;
      case 'registro':
      $route_prefered = 'views/register.php';
        break;
    }
  }elseif (count($part) == 3) {
    if ($part[1] == 'registro-correcto'){
      $name = $part[2];
      $route_prefered = 'views/succesfull_register.php';
    }
  }
}
include_once $route_prefered;
