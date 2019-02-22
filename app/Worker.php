<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Worker extends Model
{


  public function zodiak()
  {
    return $this->hasOne('App\Zodiak');
  }
    
}
