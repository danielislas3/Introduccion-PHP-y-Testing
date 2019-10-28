<?php

namespace App;

class User
{

  protected $name;

  public function setName($name)
  {
    $this->name = $name;
   
  }
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;   
  }

  public function getName()
  {
   return $this->name;
  }
  public function getLastName()
  {
   return $this->lastName;
  }
}
