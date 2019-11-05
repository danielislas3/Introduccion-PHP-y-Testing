<?php

namespace App\Controllers;
use App\Models\{Job, Proyect};


class IndexController extends BaseController
{
  public function indexAction()
  {
    $jobs = Job::all(); //trae todos los jobs
    $proyects = Proyect::all(); //trae todos los proyects



    $name = 'Daniel Orio';
    $limitMonths = 2000;

    return $this->renderHTML('index.twig',[
      'name'=>$name,
      'jobs'=>$jobs
    ]);

  }
}
