<?php
namespace App\Controller;

use Core\HTML\BootstrapForm;
use \App;
use \Core\Auth\DatabaseAuth;


class UsersController extends AppController
{
   public function login()
   {
      $this->template = 'allarticles';

     $errors = false;
     if (!empty($_POST))
     {
       $auth = new \Core\Auth\DatabaseAuth(App::getInstance()->getDatabase());
       if($auth->login($_POST['username'], $_POST['password'])) //si renvoi true
       {
         header('Location: index.php?p=admin.index');
       }
       else
       {
         $errors = true;
       }
     }
     $form = new \Core\HTML\BootstrapForm($_POST);
     $this->render('users.login', compact('form', 'errors'));
   }

   public function disconnect()
   {
     $app = App::getInstance();
     $auth = new DatabaseAuth($app->getDatabase());

     if (!$auth->logged())
     {
       $this->forbidden();
     }

     else
     {
        $var = $auth->disconnect();
        if (empty($var))
        {
          header('Location: index.php?p=admin.index');
        }
     }
   }
     public function forgot()
     {
       $this->template = 'allarticles';
       if (!empty($_POST['mail']))
       {
           $auth = new \Core\Auth\DatabaseAuth(App::getInstance()->getDatabase());

           $var = $auth->forgot($_POST['mail']);

           if (!empty($var))
           {
             $lien = 'http://localhost/index.php?p=changemdp&id=' . $var;
             mail($_POST['mail'], 'Lien de changement de votre mot de passe', $lien);
           }

           else
           {
             header('Location: index.php?p=index');
           }

       }

       $form = new \Core\HTML\BootstrapForm();
       $this->render('users.forget', compact('form'));
     }

     public function changeMdp()
     {

         $this->template = 'allarticles';
         if (!empty($_GET['id']))
         {
             $auth = new \Core\Auth\DatabaseAuth(App::getInstance()->getDatabase());

             if ($auth->changeMdp($_GET['id']))
             {
               header('Location: index.php?p=change&id=' . $_GET['id']);
             }

             else
             {
                header('Location: index.php?p=index');
             }

         }

     }

     public function change()
     {
       $this->template = 'allarticles';

       if (!empty($_GET['id']) && !empty($_POST['mdp']))
       {
          $change = new \Core\Auth\DatabaseAuth(App::getInstance()->getDatabase());

          if ($change->change($_GET['id'], sha1($_POST['mdp'])))
          {
            header('Location: index.php?p=admin.index');
          }
       }

       else
       {
         $form = new \Core\HTML\BootstrapForm();
         $this->render('users.change', compact('form'));
       }
     }

   }







 ?>
