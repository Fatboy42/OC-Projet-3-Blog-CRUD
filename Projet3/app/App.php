<?php

use Core\Config;
use Core\Database\MysqlDatabase;

Class App
{

  public $title = "Jean Forteroche";
  private $db_instance;
  private static $_instance;


  public static function load()
  {
    session_start();
    require ROOT . '/app/Autoloader.php';
    App\Autoloader::register();
    require ROOT . '/core/Autoloader.php';
    core\Autoloader::register();
  }

  public static function getInstance()
  {
    if (is_null(self::$_instance))
    {
      self::$_instance = new App();
    }
    return self::$_instance;
  }

  public function getTable($table)
  {
    $class_name = '\\App\\Table\\' . ucfirst($table) . 'Table';
    return new $class_name($this->getDatabase());
  }

  public function getDatabase()
  {
    $config = Config::getInstance(ROOT . '/config/config.php');
    if (is_null($this->db_instance))
    {
      $this->db_instance = new MysqlDatabase($config->get('db_name'), $config->get('db_user'), $config->get('db_pass'), $config->get('db_host'));
    }
    return $this->db_instance;

  }





  //private static $title = 'Jean Forteroche';


  /*public static function getDatabase()
  {
    if (is_null(self::$database))
    {
      self::$database = new Database(self::DB_NAME, self::DB_USER, self::DB_PASS, self::DB_HOST);
    }
    return self::$database;
  }


  public static function getTitle()
  {
    return self::$title;
  }

  public static function setTitle($titre)
  {
    self::$title = $titre . ' | ' . 'Jean Forteroche';
  }*/
}


 ?>
