<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PostCreationTime extends Model
{
    //
    public function post()
    {
      return $this->belongsTo('App\Post')
    }
}
