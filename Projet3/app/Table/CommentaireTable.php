<?php

namespace App\Table;
use Core\Table\Table;



class CommentaireTable extends Table
{
   protected $table = 'commentaires';

   public function insertComment($id, $fields)
   {
     var_dump($id, $fields);
     $sql_parts = [];
     $attributes = [];
     foreach ($fields as $key => $value) //key = nom du champ, value = la valeur
     {
       $sql_parts[] = "$key = ?";
       $attributes[] = $value;
     }

     var_dump($attributes);

     $sql_part = implode(', ', $sql_parts);
     var_dump($sql_part);
     var_dump($this->table);
     return $this->query("INSERT INTO {$this->table} SET $sql_part ", $attributes, true);
   }

   public function comments($id) //fonction qui selectionne les commentaire par leur etat
   {
     return $this->query('SELECT commentaires.id, commentaires.pseudo, commentaires.mail, commentaires.contenu, commentaires.date
    FROM commentaires
    INNER JOIN articles ON articles.id = commentaires.article #\'commentaire.article\' est l\'id de l\'article auquel fait reference le commentaire*/
    WHERE articles.id= ? AND commentaires.etat != 3 ORDER BY id DESC', [$id]);
   }

   public function reportComm($id)
   {
     return $this->query("UPDATE {$this->table} SET etat = 2 WHERE id = ?", [$id], true);
   }

   public function allEtat($etat)
   {
    return $this->query('SELECT commentaires.id, commentaires.pseudo, commentaires.mail, commentaires.contenu, commentaires.date, articles.titre, articles.id AS idarticle
    FROM commentaires
    INNER JOIN articles ON commentaires.article = articles.id
    WHERE commentaires.etat = ' . $etat . '  ORDER BY commentaires.id DESC');
   }
   /*utilisation dun alias 'idarticle', car on pourrait le confondre en sortie avec commentaire.id  */

   public function deleteComm($id)
   {
     return $this->query("UPDATE {$this->table} SET etat = 3 WHERE id = ?", [$id], true);
   }

   public function rehabComm($id)
   {
     return $this->query("UPDATE {$this->table} SET etat = 1 WHERE id = ?", [$id], true);
   }

   //possible creation d'une super fonction qui reunis 'reportComm', 'deleteComm' et 'rehabComm' avec en parametre l'id, et l'etat que l'on souhaite lui donner.
   //Mais pour plus de clareté j'ai preferé 3 methodes distinctes (meme si cela rajoute du code)


}


 ?>
