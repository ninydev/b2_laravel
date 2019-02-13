<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

use TCG\Voyager\Facades\Voyager;
use TCG\Voyager\Traits\Resizable;
use TCG\Voyager\Traits\Translatable;

class People extends Model
{
    //
    use Translatable, Resizable;
    protected $translatable = ['name'];

    protected $table="peoples";

    public function save(array $options = [])
    {
        // If no author has been assigned, assign the current user's id as the author of the post
        // if (!$this->author_id && Auth::user()) {
            $this->author_id = Auth::user()->id;
        // }

        parent::save();
    }

 

    
}
