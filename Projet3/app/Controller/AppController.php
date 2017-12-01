<?php

namespace App\Controller;

use Core\Controller\Controller;
use \App;

class AppController extends Controller
{
  protected $template = 'default';

  public function __construct()
  {
    $this->viewPath = ROOT . '/app/Views/';
  }

  protected function loadModel($model_name)
  //charge la table passe en parametre, et crée dynamiquement des attribut dans l'objet ($this->$model_name)
  //le $ du 'model_name' indique que c'est un attibut crée dynamiquement, et cet atribut aura pour nom le parametre que l'on donne à la fonction.
  //les attributs crés sont directement instanciées du resultat de 'App::getInstance()->getTable($model_name)'
  {
    $this->$model_name = App::getInstance()->getTable($model_name);
  }
}
