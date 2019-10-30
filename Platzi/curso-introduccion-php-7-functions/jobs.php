<?php

require_once 'vendor/autoload.php';

use App\Models\{Job,Proyect,Printable};

$job1 = new Job('Web Developer','This is an awesome job!!!');
$job1->months= 16;

$job2 = new Job('PHP Developer','This is an bad job :(  !!!');
$job2->months= 7;

$job3 = new Job('Devops', 'This is an awesome job!!!');
$job3->months = 32;


$proyect1= new Proyect ('Proyect 1','Description 1');

$jobs = [
  $job1,
  $job2,

];
$proyects=[
  $proyect1
];




function printElement(Printable $job) {
  if($job->visible == false) {
    return;
  }

  echo '<li class="work-position">';
  echo '<h5>' . $job->getTitle() . '</h5>';
  echo '<p>' . $job->getDescription() . '</p>';
  echo '<p>' . $job->getDurationAsString() . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}