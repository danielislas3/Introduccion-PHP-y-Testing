<?php

use PHPUnit\Framework\TestCase;
use App\User;

class UserTest extends TestCase
{
  protected $user;

  public function setUp(): void
  {
    $this->user = new User;
  }

  public function testICanTheName()
  {

    $this->user->setName("Italo");

    $this->assertEquals($this->user->getName(), "Italo");
  }

  public function testICanLastTheName()
  {

    $this->user->setLastName("Perez");

    $this->assertEquals($this->user->getLastName(), "Perez");
  }

  public function testICanTheEmail()
  {
    $email = "yod@gmail.com";
    $this->user->setEmail($email);

    $this->assertEquals($this->user->getEmail(), "yod@gmail.com");
  }

  public function testGetTheFullName()
  {

   	$this->user->setName("Italo");
		$this->user->setLastName("Morales");
		$this->assertEquals($this->user->getTheFullName(), "Italo Morales");
  }
  public function testGetTheFullNameEmpty()
  {

   	
		$this->assertEmpty($this->user->getTheFullName());
  }
 
  public function testName_LastName_Email_WhithOutSpaces(){
    $this->user->setName('   Pedrito  ');
    $this->user->setLastName('   Perez   ');
    $this->user->setEmail('   hola@info.com  ');

    $this->assertEquals($this->user->getName(), 'Pedrito');
    $this->assertEquals($this->user->getLastName(),'Perez');
    $this->assertEquals($this->user->getEmail(),'hola@info.com');
  }
}
