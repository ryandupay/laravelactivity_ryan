<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function votes()
    {
        return $this->hasMany('App\Vote');
    }
 
}
