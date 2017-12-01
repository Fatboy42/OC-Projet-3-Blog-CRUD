<?php

namespace App\Controller\Admin;

use \App;
use \Core\Auth\DatabaseAuth;

class AppController extends \App\Controller\AppController //herite de l'app controller principal
{
    public function __construct()
    {
       parent::__construct();

       $app = App::getInstance();
       $auth = new DatabaseAuth($app->getDatabase());

       if (!$auth->logged()) {
         $this->forbidden();
       }
    }
}
