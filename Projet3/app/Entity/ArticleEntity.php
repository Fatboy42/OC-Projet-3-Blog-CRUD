<?php

namespace App\Entity;

class ArticleEntity extends \Core\Entity\Entity
{
  public function getUrl()
  {
    return 'index.php?p=article&id=' . $this->id;
  }

  public function getExtrait()
  {
    $var = strip_tags($this->contenu);
    return '<p>' .  substr($var, 0, 50) . '... </p>';
  }

}

 ?>
