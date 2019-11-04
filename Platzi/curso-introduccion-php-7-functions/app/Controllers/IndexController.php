<?php

namespace App\Controllers;
use App\Models\{Job, Proyect};


class IndexController
{
  public function indexAction()
  {
    $jobs = Job::all(); //trae todos los jobs
    $proyects = Proyect::all(); //trae todos los proyects



    $name = 'Daniel Orio';
    $limitMonths = 2000;

    include '../views/index.php';
  }
}
