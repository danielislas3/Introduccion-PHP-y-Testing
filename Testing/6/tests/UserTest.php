<?php

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
  protected $name;
 
  public function setUp(): void
   {
    $this->user= new User;
  }
  public function testICanTheName(){

    $this->user->setName('Italo');

    $this->assertEquals($this->user->getName(),"Italo");
    
  }
  public function testICanLastTheName(){

    $this->user->setLastName('Perez');

    $this->assertEquals($this->user->getLastName(),"Perez");

  }
}
