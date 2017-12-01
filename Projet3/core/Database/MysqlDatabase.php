<?php

namespace Core\Database;

use \PDO;

class MysqlDatabase extends Database
{

  private $db_name,
          $db_user,
          $db_pass,
          $db_host,
          $pdo;



  public function __construct($db_name, $db_user = 'root', $db_pass = '', $db_host = 'localhost')//valeurs par defaut 
  {
    $this->db_name = $db_name;
    $this->db_user = $db_user;
    $this->db_pass = $db_pass;
    $this->db_host = $db_host;
  }

  private function getPDO()
  {
    if ($this->pdo === null)
    {
      $pdo = new PDO('mysql:dbname=' . $this->db_name . ';host=' . $this->db_host, $this->db_user, $this->db_pass);
      //'mysql:dbname=projet3;host=localhost', 'root', ''
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $this->pdo = $pdo;
    }
    return $this->pdo;
  }

  public function query($statement, $class_name = null, $one = false)
  {

    $req = $this->getPDO()->query($statement);
    if (strpos($statement, 'UPDATE') === 0 || strpos($statement, 'INSERT') === 0 || strpos($statement, 'DELETE') === 0)
    {
      return $req;
    }
    if (is_null($class_name))
    {
      $req->setFetchMode(PDO::FETCH_OBJ);
    }
    else
    {
     $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
    }

    if ($one)
    {
      $datas = $req->fetch();
    }
    else
    {
      $datas = $req->fetchAll();
    }
    return $datas;
  }


  public function prepare($statement, $attributes, $class_name = null, $one = false)
  {

      $req = $this->getPDO()->prepare($statement);
      $exec = $req->execute($attributes);
      if (strpos($statement, 'UPDATE') === 0 || strpos($statement, 'INSERT') === 0 || strpos($statement, 'DELETE') === 0)
      {
        return $exec;
      }
      if (is_null($class_name))
      {
        $req->setFetchMode(PDO::FETCH_OBJ);
      }
      else
      {
       $req->setFetchMode(PDO::FETCH_CLASS, $class_name);
      }
      if ($one)
      {
        $datas = $req->fetch();
      }
      else
      {
        $datas = $req->fetchAll();
      }

      return $datas;


  }

  public function lastId()
  {
    return $this->getPDO()->lastInsertId();
  }
}


 ?>
