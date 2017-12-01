<?php

namespace Core\Entity;

class Entity
{

  public function __get($key)
  {
    $function = 'get' . ucfirst($key);
    $this->$key = $this->$function();
    return $this->$key;

  }

}


 ?>
