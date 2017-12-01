<?php

namespace Core\Controller;


class Controller
{
  protected $viewPath;
  protected $template;

  protected function render($view, $variables = [])
  {
    ob_start();
    extract($variables); // extract vérifie chaque clé afin de contrôler si elle a un nom de variable valide. Elle vérifie également les collisions avec des variables existantes dans la table des symboles.
    require($this->viewPath . str_replace('.', '/', $view) . '.php');
    $content = ob_get_clean();
    require($this->viewPath . 'templates/' . $this->template . '.php');
    unset($_SESSION['flash']);
    //unset la variable session declarée dans commentairescontroller, unset après le require car si fait avant la variable session flash aurait ete vidé et la condition dans la vue aurait ete fausse
    //
  }

  protected static function notFound()
  {
    header("HTTP/1.0 404 Not Found");
    header('Location:index.php?p=404');
  }

  protected static function forbidden()
  {
    header('HTTP/1.0 403 Forbidden');
    header('Location:index.php?p=login');
    //die('Accès interdit');
  }
}


 ?>
