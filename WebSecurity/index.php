<?php

$components = parse_url($_SERVER["REQUEST_URI"]);
$route = $components['path'];
$part = explode("/", $route); //array with url
$part = array_filter($part); //any empty string will set null
$part = array_slice($part, 0); //clean the empty slots
$route_prefered = '404';

include_once $route_prefered;



/*
script example
if ($part[2] == 'registro') {
  include_once 'views/register.php';
}elseif($part[2] == 'login'){
  include_once 'views/login.php';
}elseif ($part[1] == 'WebSecurity') {
  include_once 'views/home.php';
}else{
  echo 'error404';
}
*/
