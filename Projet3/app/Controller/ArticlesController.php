<?php

namespace App\Controller;


use Core\Controller\Controller;


class ArticlesController extends AppController
{
  public function __construct()
  {
    parent::__construct();

    $this->loadModel('Article');
    $this->loadModel('Commentaire');

  }

  public function index()// liste les derniers articles, accueil
  {
     $posts = $this->Article->lastWithRestricts();//last retourne un tableau d'objet
     $this->render('articles.home', compact('posts')); //compact: Crée un tableau à partir de variables et de leur valeur
  }

  public function show()// montre un article, le formulaire pour commenter l'article et les commentaires
  {

    $this->template = 'allarticles';

    $article = $this->Article->find($_GET['id']); //find retourne un objet car attribut $get id
    if ($article === false || $article->etat == 2)
    {
      $this->notFound();
    }
    if (!empty($_POST['pseudo']) && !empty($_POST['mail']) && !empty($_POST['contenu']) && !empty($_POST['id']))
    {

      $resultat = $this->Commentaire->insertComment($_GET['id'], ['pseudo' => htmlspecialchars($_POST['pseudo']), 'mail' => htmlspecialchars($_POST['mail']), 'contenu' => $_POST['contenu'], 'article' => $_POST['id'], 'date'=>date('Y-m-d H:i:s')]);
      if ($resultat)// si $resultat = true
      {
        header("Location: index.php?p=article&id=" . $_GET['id']); // peut aussi retourner la fonction index de $this 'return $this->index()'
      }
      else
      {
        $this->notFound();
      }
    }

    $commentaires = $this->Commentaire->comments($_GET['id']);
    $form = new \Core\HTML\BootstrapForm();
    $this->render('articles.article', compact('article', 'form', 'commentaires'));
  }

  public function htmlOnly()
  {
    $this->template = 'allarticles';

    $this->render('articles.about');
  }

  public function all()
  {
    $this->template = 'allarticles';

    $all = $this->Article->all();
    if (is_null($all))
    {
      $this->notFound();
    }
    $this->render('articles.all', compact('all'));
  }
}


 ?>
