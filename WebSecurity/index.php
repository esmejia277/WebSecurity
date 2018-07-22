<?php
include_once 'app/Config.inc.php';
include_once 'app/Connection.inc.php';

include_once 'app/User.inc.php';
include_once 'app/Entry.inc.php';
include_once 'app/Comment.inc.php';

include_once 'app/RepoUser.inc.php';
include_once 'app/RepoEntry.inc.php';
include_once 'app/RepoComment.inc.php';

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
      case 'relleno':
      $route_prefered = 'database/fill.php';
        break;
    }
  }elseif (count($part) == 3) {
    if ($part[1] == 'registro-correcto'){
      $name = $part[2];
      $route_prefered = 'views/succesfull_register.php';
    }
    if($part[1] == 'entrada'){
      $url = $part[2];
      Connection :: openConnection();
      $entry = RepoEntry ::getEntryURL(Connection :: getConnection(), $url);

      if($entry != null){
        $author = RepoUser :: getUserID(Connection :: getConnection(), $entry -> getAuthor_ID());
        $route_prefered = 'views/entry.php';
      }
    }
  }
}
include_once $route_prefered;
