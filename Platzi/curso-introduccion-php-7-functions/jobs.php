<?php

class Job {
  private $title;
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
$job1 = new Job('Web Developer','This is an awesome job!!!');
$job1->months= 16;

$job2 = new Job('PHP Developer','This is an bad job :(!!!');
$job2->months= 7;

echo 'llamando jobs';
$jobs = [
  $job1,
  $job2,

];



function printJob($job) {
  if($job->visible == false) {
    return;
  }

  echo '<li class="work-position">';
  echo '<h5>' . $job->getTitle() . '</h5>';
  echo '<p>' . $job->description . '</p>';
  echo '<p>' . $job->getDurationAsString() . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}