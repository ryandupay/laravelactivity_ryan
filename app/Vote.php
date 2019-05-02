<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    public function book()
    {
       return $this->belongsTo('App\Book');
    }

}
