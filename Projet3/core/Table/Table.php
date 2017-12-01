<?php

namespace Core\Table;

class Table
{
  protected $table;
  protected $db;

  public function __construct(\Core\Database\Database $db) //parametre de type \Core\Database
    {
      $this->db = $db;
      if (is_null($this->table))
      {
        $pieces = explode('\\', get_class($this));
        $class_name = end($pieces);
        $this->table = strtolower(str_replace('Table', '', $class_name)) . 's';
      }

    }

    public function create($fields)
    {
      $sql_parts = [];
      $attributes = [];
      foreach ($fields as $key => $value) //key = nom du champ, value = la valeur
      {
        $sql_parts[] = "$key = ?";
        $attributes[] = $value;
      }
      $sql_part = implode(', ', $sql_parts);
      return $this->query("INSERT INTO {$this->table} SET $sql_part ", $attributes, true);
    }

    public function delete($id)
    {
      return $this->query("DELETE FROM {$this->table} WHERE id = ?", [$id], true);
    }


   public function update($id, $fields)
   {
     $sql_parts = [];
     $attributes = [];
     foreach ($fields as $key => $value) //key = nom du champ, value = la valeur
     {
       $sql_parts[] = "$key = ?";
       $attributes[] = $value;
     }
     $attributes[] = $id;
     $sql_part = implode(', ', $sql_parts);
     return $this->query("UPDATE {$this->table} SET $sql_part WHERE id = ?", $attributes, true);
   }

   public function all()
   {
    return $this->db->query('SELECT * FROM articles ');
   }

   public function query($statement, $attributes = null, $one = false)
   {
     if ($attributes)
     {
       return $this->db->prepare($statement, $attributes, str_replace('Table', 'Entity', get_class($this)), $one);
     }
     else
     {
      return $this->db->query($statement, str_replace('Table', 'Entity', get_class($this)), $one);
      //get_class renvoi le nom de la classe qui se sert de la methode contrairement a __CLASS__ qui lui renvoi non pas le nom de la classe qui appel mais le nom de la classe dans laquel on se trouve
     }
   }


   public function find($id)
   {
     //return $this->query("SELECT * FROM {$this->table} WHERE id = ? ", [$id], true);

     return $this->query('SELECT articles.id, articles.titre, articles.auteur, articles.etat, articles.contenu, articles.dateAjout, articles.dateModif, users.pseudo
     FROM articles
     INNER JOIN users ON articles.auteur = users.id
     WHERE articles.id = ?', [$id], true);
     
   }
}


 ?>
