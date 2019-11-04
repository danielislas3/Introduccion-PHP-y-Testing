<?php

namespace App\Controllers;

use App\Models\{Job, Proyect};

class JobsController
{
  public function getAddJoobAction($request)
  {

    if ($request->getMethod() == 'POST') {
      $postData = $request->getParsedBody();

      $job = new Job();
      $proyect = new Proyect();

      $proyect->title = $postData['titleProyect'];
      $proyect->description = $postData['descriptionProyect'];

      $job->title = $postData['title'];
      $job->description = $postData['description'];

      $job->save();
      $proyect->save();
    }
    include '../views/addJob.php';
  }
}
