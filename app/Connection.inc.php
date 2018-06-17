<?php
class Connection{
  private static $connection;
  public static function openConnection(){
    if(!isset(self::$connection)){ /* if connection is started */
      try {
        include_once 'config.inc.php';
        self::$connection = new PDO("mysql:host=$server;dbname=$database", $user_name, $passwd); /*open connection*/
        self::$connection -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); /*show erro*/
        self::$connection -> exec("SET CHARACTER SET utf8");
        print 'OPEN'. "<br>";

      } catch (PDOException $e) {
        print('ERROR:'.$e->getMessage()."<br>");
        die();
      }
    }
  }

  public static function closeConnection(){
    if(isset(self::$connection)){
      self:$connection = null;
      print 'CLOSED' . "<br>" ;
    }
  }

  public static function getConnection(){
    return self::$connection;
  }






}
?>
