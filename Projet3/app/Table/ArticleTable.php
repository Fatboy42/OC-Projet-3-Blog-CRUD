<?php

namespace App\Table;
use Core\Table\Table;



class ArticleTable extends Table
{
   protected $table = 'articles';

   public function last($etat) //retourne les touts les articles sous forme de tableau
   {
     return $this->query('SELECT * FROM articles WHERE etat = ' . $etat . ' ORDER BY id DESC '); //FROM {$this->table}
   }

   public function lastWithRestricts()
   {
     return $this->query("SELECT * FROM articles WHERE etat = 1 ORDER BY id DESC LIMIT 5 ");
   }

   public function all()
   {
     return $this->query("SELECT * FROM articles WHERE etat = 1 ORDER BY id DESC ");
   }
}


 ?>
