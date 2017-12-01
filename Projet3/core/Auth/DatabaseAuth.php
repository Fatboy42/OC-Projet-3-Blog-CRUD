<?php

namespace Core\Auth;

use Core\Database\Database;

class DatabaseAuth
{
  private $db;


  public function __construct(Database $db)
  {
    $this->db = $db;
  }

  public function getUserId()
  {
    if ($this->logged())//true
    {
      return $_SESSION['auth'];
    }
  }


  public function login($username, $password) //retourne boolean
  {
    $user = $this->db->prepare('SELECT * FROM users WHERE pseudo = ?', [$username], null, true);
    if ($user) //si pseudo trouvé en bdd
    {
      if($user->mdp === sha1($password))
      {
        $_SESSION['auth'] = $user->id;
        return true;
      }//return true si le mot de passe correspond au pseudo envoyé
      else
      {
        return false;
      }
    }
    else {
      return false;
    }

  }

  public function logged()//retourne boolean si loggé ou non
  {
    return isset($_SESSION['auth']);
  }

  public function disconnect()
  {
    return $_SESSION = array();
  }

  public function forgot($mail)
  {
      $mail = $this->db->prepare('SELECT * FROM users WHERE mail = ?', [$mail], null, true);

      if ($mail)
      {
        $varuniq = uniqid();
        $varuniqsha = sha1($varuniq);

        $var = $this->db->prepare('INSERT INTO passchange SET uniqid = ?', [$varuniqsha], true);

        if ($var)
        {
          return $varuniqsha;
        }
        //retourne varuniqsha si l'insertion c'est bien passé
      }
  }

  public function changeMdp($id)
  {
    $uniqid = $this->db->prepare('SELECT * FROM passchange WHERE uniqid = ?', [$id], null, true);

    if ($uniqid)
    {
      return true;
    }

    else
    {
      return false;
    }

  }

  public function change($uniqid, $pass)
  {
    $uniq = $this->db->prepare('SELECT * FROM passchange WHERE uniqid = ?', [$uniqid], null, true);
    if ($uniq)
    {
      $change = $this->db->prepare('UPDATE users SET mdp = ? WHERE id = 1', [$pass], null, true);
      if ($change)
      {
        $delete = $this->db->prepare('DELETE FROM passchange',null, true);
        return true;
      }
      else
      {
        return false;
      }

    }

  }
}


 ?>
