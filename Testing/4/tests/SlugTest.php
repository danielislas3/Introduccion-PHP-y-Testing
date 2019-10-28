<?php

use PHPUnit\Framework\TestCase;
use App\Slug;

class SlugTest extends TestCase
{

  public function test_render()
  {
    $slug = new Slug("Cursos de Laravel");
    $expected = "cursos-de-laravel";
    $this->assertEquals($slug->render(), $expected);
  }

    
  public function test_render_sin_espacios()
  {
    $slug = new Slug("  Cursos de Laravel  ");
    $expected = "cursos-de-laravel";
    $this->assertEquals($slug->render(), $expected);
  }

  //cada metodo es una prueba y cada metodo es una assertion 
}
