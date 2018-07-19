<?php
//constant variable
define('name_server', 'localhost');
define('user_name', 'root');
define('password', '');
define('database','WebSecurity');

//routes
define("server", "http://localhost:10000/WebSecurity");
define("register", server . "/registro");
define("login", server . "/login");
define("correct_register" , server . "/registro-correcto");
define("logout", server . "/logout");

//rosources
define("css", server . "/css/");
define("js", server . "/js/");
define("icons", server . "/fontawesome-free-5.0.13/web-fonts-with-css/css/");
