<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo css ?>bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo css ?>styles.css">
    <link rel="stylesheet" href="<?php echo icons ?>fontawesome-all.min.css">
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
    <?php
    if(!isset($title) || empty($title)){
      $title = 'WebSecurity';
    }
    echo "<title> $title </title>";
    ?>
  </head>
  <body>
