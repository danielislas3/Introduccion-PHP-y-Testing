<?php
use PHPUnit\Framework\TestCase;
class ExampleTest extends TestCase{
  public function testTrue(){
    $this->assertTrue(true);
  } 
  public function testFalse(){
    $var= false;
    $this->assertFalse($var);
  } 
  public function testEquals(){
    $result= 5 + 5;
    $this->assertEquals($result, "10");
  } 
  public function testSame(){
    $result= 5 + 5;
    $this->assertSame($result, 10);
  } 
  public function testArray(){
    $result= [];
    $this->assertIsArray($result);
  } 
  public function testBool(){
    $result= false;
    $this->assertIsBool($result);
  } 
  public function testString(){
    $result= "false";
    $this->assertIsString($result);
  } 
  public function testEmpty(){
    $result= [];
    $this->assertEmpty($result);
  } 
  public function testCount(){
    $arr=['Amarillo','Azul'];
    $this->assertCount(2,$arr);
  } 
  public function testHasKey(){
    $arr=['color'=>'Azul'];
    $this->assertArrayHasKey('color',$arr);
  } 
  /***
  *
  * Una afirmacion analiza el resultado de una clase
  *
  **/
}