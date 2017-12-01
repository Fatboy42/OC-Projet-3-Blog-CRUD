<?php

namespace App\Controller\Admin;



class CommentairesController extends AppController //herite de AppController présent dans Admin
{
  public function __construct()
  {
    parent::__construct();

    $this->loadModel('Commentaire');

  }

  public function indexComm() //affiche un index des commentaires normaux, signalés et supprimmés. L'etat qui nous interesse est directement passé en parametre
  {
    $this->template = 'allarticles';
    $reported = $this->Commentaire->allEtat(2); // les commentaires signalés ont un etat qui vaux 2
    $deleted = $this->Commentaire->allEtat(3); // les commentaires supprimés ont un etat qui vaux 3
    $fine = $this->Commentaire->allEtat(1); // les commentaires 'normaux' ont un etat qui vaux 1

    $this->render('admin.comments.moderation', compact('reported', 'deleted', 'fine'));
  }

  public function deleteComm() // ne supprime pas le commentaire mais le rend invisible sur le site (changement d'etat) etat 3
  {
    if (!empty($_POST['id']))
    {

      $resultat = $this->Commentaire->deleteComm($_POST['id']);
      if ($resultat)// si $resultat = true
      {
        header('Location: index.php?p=index.commentaire');
      }
      else
      {
        $this->notFound();
      }
    }
  }

  public function rehabComm()// remet son etat à la normal (1)
  {
    if (!empty($_POST['id']) )
    {

      $resultat = $this->Commentaire->rehabComm($_POST['id']);
      if ($resultat)// si $resultat = true
      {
          header('Location: index.php?p=index.commentaire');
      }
      else
      {
        $this->notFound();
      }
    }
  }


}


 ?>
