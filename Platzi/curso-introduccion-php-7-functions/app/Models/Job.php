<?php
namespace App\Models;

class Job extends BaseElement {
  public function __construct($title,$desription)
  {
    $newTitle= 'job' . $title;
    $this->title=$newTitle;
    parent::__construct($newTitle,$desription);//constructor de clase padre
    
  }
  public function getDurationAsString() {

    $years = floor($this->months / 12);
    $extraMonths = $this->months % 12;
  
    return "Job duration: $years years $extraMonths months";
  }


}