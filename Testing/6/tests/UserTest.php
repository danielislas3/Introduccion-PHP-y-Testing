<?php

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{ 
  public function testICanTheName(){

    $user = new User();
    $user->setName('Italo');

    $this->assertEquals($user->getName(),"Italo");

  }
}
