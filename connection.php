<?php
/**
 * Database Connection Class
 */
class Db
{
  private static $instance = null;

  private function __contruct() {}

  private function __clone() {}

  public static function getInstance() {
    if (!asset(self::$instance)) {
      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      self::$instance = new PDO('mysql:host=localhost;dbname=php_mvc' , 'root' , '', $pdo_options);
    }
    return self::$instance;
  }
}

 ?>
