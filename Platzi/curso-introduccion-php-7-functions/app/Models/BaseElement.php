<?php

class BaseElement {
  protected $title;//accedido desde la clase y clases hijas
  public $description;
  public $visible;
  public $months;

  public function __construct($title, $description)
  {
    $this->setTitle($title);
    $this->description=$description;
  }

  public function setTitle($title){
    if($title==''){
      $this->title='N/A';
    }
     $this->title= $title;
  }
  public function getTitle(){
    return $this->title; 
  }
  
  public function getDurationAsString() {
    $years = floor($this->months / 12);
    $extraMonths = $this->months % 12;
  
    return "$years years $extraMonths months";
  }

}