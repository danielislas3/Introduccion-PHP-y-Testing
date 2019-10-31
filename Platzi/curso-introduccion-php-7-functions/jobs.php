<?php


use App\Models\{Job,Proyect};

$jobs=Job::all();//trae todos los jobs


function printElement( $el) {
  // if($job->visible == false) {
  //   return;
  //}
  echo '<li class="work-position">';
  echo '<h5>' . $el->title . '</h5>';
  echo '<p>' . $el->description . '</p>';
  echo '<p>' . $el->getDurationAsString() . '</p>';
  echo '<strong>Achievements:</strong>';
  echo '<ul>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
  echo '</ul>';
  echo '</li>';
}

