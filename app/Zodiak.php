<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Zodiak extends Model
{

  public function worker()
  {
    return $this->belongsTo('App\Worker');
  }
    
}
