<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

  protected $table = 'jobs'; //se conecta a la tabla jobs de la base de datos
  
  public function getDurationAsString()
  {

    $years = floor($this->months / 12);
    $extraMonths = $this->months % 12;

    return "Job duration: $years years $extraMonths months";
  }
}
