<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function Scripts()
    {
      return $this->belongsToMany('App\Script');
    }
}
