<?php

namespace App;

class User
{

  protected $name;
  protected $email;
  protected $lastName;

  public function setName($name)
  {
    $this->name = $name;
   
  }
  public function setLastName($lastName)
  {
    $this->lastName = $lastName;   
  }
  public function setEmail($email)
  {
    $this->email = $email;   
  }

  public function getName()
  {
   return $this->name;
  }
  public function getLastName()
  {
   return $this->lastName;
  }
  public function getEmail()
  {
   return $this->email;
  }
  public function getTheFullName()
  {
   return trim("$this->name $this->lastName");
  }
}
