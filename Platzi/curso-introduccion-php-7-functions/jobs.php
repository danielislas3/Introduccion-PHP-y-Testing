<?php

require 'app/Models/Job.php';
require 'app/Models/Proyect.php';

$job1 = new Job('Web Developer','This is an awesome job!!!');
$job1->months= 16;

$job2 = new Job('PHP Developer','This is an bad job :(  !!!');
$job2->months= 7;


$proyect1= new Proyect ('Proyect 1','Description 1');

$proyects=[
  $proyect1
];

$jobs = [
  $job1,
  $job2,

];



function printElement($job) {
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