<?php

define('ROOT', dirname(__DIR__));

require ROOT . '/app/App.php';

App::load();



if (isset($_GET['p']))
{
  $page = $_GET['p'];
}

else
{
  $page = 'home';
}

ob_start();
switch ($page)
{
  case 'home':
    $controller = new \App\Controller\ArticlesController();
    $controller->index();
    break;

  case 'article':
    $controller = new \App\Controller\ArticlesController();
    $controller->show();
    break;

  case 'login':
   $controller = new \App\Controller\UsersController();
   $controller->login();
   break;

  case 'admin.index':
   $controller = new \App\Controller\Admin\ArticlesController();
   $controller->index();
   break;

   case 'edit':
     $controller = new \App\Controller\Admin\ArticlesController;
     $controller->edit();
     break;

   case 'add':
   $controller = new \App\Controller\Admin\ArticlesController;
   $controller->add();
     break;

   case 'delete':
   $controller = new \App\Controller\Admin\ArticlesController;
   $controller->delete();
      break;

   case 'report':
   $controller = new \App\Controller\CommentairesController;
   $controller->reportComment();
   break;

   case 'index.commentaire':
   $controller = new \App\Controller\Admin\CommentairesController;
   $controller->indexComm();
   break;

   case 'delete.comm':
   $controller = new \App\Controller\Admin\CommentairesController;
   $controller->deleteComm();
   break;

   case 'rehab':
   $controller = new \App\Controller\Admin\CommentairesController;
   $controller->rehabComm();
   break;

   case 'about':
   $controller = new \App\Controller\ArticlesController;
   $controller->htmlOnly();
   break;

   case 'all':
   $controller = new \App\Controller\ArticlesController;
   $controller->all();
   break;

   case 'disconnect':
   $controller = new \App\Controller\UsersController;
   $controller->disconnect();
   break;

   case 'forgot':
   $controller = new \App\Controller\UsersController;
   $controller->forgot();
   break;

   case 'changemdp':
   $controller = new \App\Controller\UsersController;
   $controller->changeMdp();
   break;

   case 'change':
   $controller = new \App\Controller\UsersController;
   $controller->change();
   break;

  default:
  $controller = new \App\Controller\ArticlesController();
  $controller->index(); //Page par default, si 404 il y a, alors le visiteur sera redirigé vers la page d'accueil
  break;
}
