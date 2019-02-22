<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Car extends Model
{
	
	
    public function carOwner()
    {
        return $this->belongsTo('App\User', 'car_owner', 'user_id');
    }
	
	
	public function carModel()
    {
        return $this->belongsTo('App\CarModel', 'car_model', 'id');
    }
}
