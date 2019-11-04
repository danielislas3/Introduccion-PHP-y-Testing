<?php

namespace App\Controllers; 
use App\Models\Job;
class JobsController{
  public function getAddJoobAction(){
    if (!empty($_POST)) {

      $job = new Job();
      $proyect = new Proyect();
    
      $proyect->title = $_POST['titleProyect'];
      $proyect->description = $_POST['descriptionProyect'];
    
      $job->title = $_POST['title'];
      $job->description = $_POST['description'];
    
      $job->save();
      $proyect->save();
    }
    include '../views/addJob.php';
  }
} 