<?php


namespace App\Controller\Admin;


use \App;

class ArticlesController extends AppController //herite de AppController présent dans Admin
{
  public function __construct()
  {
    parent::__construct();

    $this->loadModel('Article');

  }

  public function index()// liste les derniers articles, accueil
  {
     $this->template = 'allarticles';
     $posts = $this->Article->last(1);
     $brouillons = $this->Article->last(2);
     // appel la fonction 'last' dans 'ArticleTable' renvoi un objet (PDO FETCH CLASS),
     //objet directement associé a son Entité ArticleEntity (l'association se fait dans le setFetchMode dans la class MYsqlDatabase)
     $this->render('admin.posts.index', compact('posts', 'brouillons')); //compact: Crée un tableau à partir de variables et de leur valeur
  }

  public function add()
  {
    $this->template = 'allarticles';
    if (!empty($_POST['titre']) && !empty($_POST['contenu']) && !empty($_POST['etat']))
    {
      $resultat = $this->Article->create(['titre' => htmlspecialchars($_POST['titre']), 'contenu' => $_POST['contenu'], 'etat' => $_POST['etat'], 'dateAjout' => date('Y-m-d H:i:s')]);
      if ($resultat)// si $resultat = true
      {
        //return $this->index();
        //header("Location: index.php?p=article&id=" . App::getInstance()->getDatabase()->lastId());

        header("Location:index.php?p=admin.index");

      }
    }

    $form = new \Core\HTML\BootstrapForm();
    $this->render('admin.posts.add', compact('form'));
  }

  public function edit()
  {
    $this->template = 'allarticles';
    if (!empty($_POST['titre']) && !empty($_POST['contenu']) && !empty($_POST['etat']))
    {
      $resultat = $this->Article->update($_GET['id'], ['titre' => htmlspecialchars($_POST['titre']), 'contenu' => $_POST['contenu'], 'etat' => $_POST['etat'], 'dateModif' => date('Y-m-d H:i:s')]);
      if ($resultat)// si $resultat = true
      {
        //header("Location: index.php?p=article&id=" . $_GET['id']); // peut aussi retourner la fonction index de $this 'return $this->index()'
        header("Location:index.php?p=admin.index");
      }
      else
      {
        $this->notFound();
      }
    }
    $post = $this->Article->find($_GET['id']); //recupere l'article à modifier pour le préremplire dans le formulaire
    if ($post)
    {
      $form = new \Core\HTML\BootstrapForm($post);
    }
    else
    {
       $this->notFound();
    }

    $this->render('admin.posts.edit', compact('form'));
  }

  public function delete()
  {
    if (!empty($_POST['id']))
    {

      $resultat = $this->Article->delete($_POST['id']);
      if ($resultat)// si $resultat = true
      {
        header("Location: index.php?p=admin.index");
      }
      else
      {
        $this->notFound();
      }
   }

  }


}
