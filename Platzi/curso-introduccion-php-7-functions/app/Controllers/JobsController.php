<?php

namespace App\Controllers;
use App\Models\{Job, Proyect};
use Respect\Validation\Validator as v;


class JobsController extends BaseController
{
  public function getAddJoobAction($request)
  {
    $responseMessage='';
    if ($request->getMethod() == 'POST') {
      $postData = $request->getParsedBody();
      $jobValidator = v::key('title', v::stringType()->notEmpty())
                  ->key('description', v::stringType()->notEmpty());

          try{

            $jobValidator->assert($postData); // trueF
            $postData = $request->getParsedBody();

            $files=$request->getUploadedFiles();
            $logo=$files['logo'];
            if($logo->getError()==UPLOAD_ERR_OK){
              $filename=$logo->getClientFilename();
              $logo->moveTo("uploads/$filename");
            }

            $job = new Job();
            $proyect = new Proyect();
      
            $proyect->title = $postData['titleProyect'];
            $proyect->description = $postData['descriptionProyect'];
      
            $job->title = $postData['title'];
            $job->description = $postData['description'];
      
            $job->save();
            $proyect->save();
            $responseMessage='Saved';

          } catch(\Exception $e){
            var_dump($e->getMessage());
            $responseMessage=$e->getMessage();
          }       
              
    }
    return ($this->renderHTML('addJob.twig',[
      'responseMessage'=>$responseMessage
    ]));
  }
}
