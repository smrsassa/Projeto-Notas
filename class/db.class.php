
<?php

class Data{

  public static $e;
  public static $database;

  public static function _DB(){
    try {
      self::$database = new PDO('mysql:host=localhost;db=db;','root','');
      self::$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $e = self::$e;
    } catch (PDOException $e) {
      echo $e->getMessage();
    }
    return self::$database;
  }

}

?>