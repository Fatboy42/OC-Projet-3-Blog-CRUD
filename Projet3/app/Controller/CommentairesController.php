<?php

namespace App\Controller;

use Core\Controller\Controller;


class CommentairesController extends AppController
{
  public function __construct()
  {
      parent::__construct();

      $this->loadModel('Commentaire');
  }

  public function reportComment()
  {

    if (!empty($_POST['idcomm']) && !empty($_POST['idarticle']))
    {

      $resultat = $this->Commentaire->reportComm($_POST['idcomm']);
      if ($resultat)// si $resultat = true
      {
        $_SESSION['flash'] = 'Commentaire signalé'; 
        header("Refresh: 0.5;url=index.php?p=article&id=" . $_POST['idarticle']);
      }
      else
      {
        $this->notFound();
      }
    }
   }




  }

 ?>
