<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Script extends Model
{
    use SoftDeletes;

    public function categories()
    {
      return $this->belongsToMany('App\Category');
    }

    public function hasCategory($id)
    {
      $cat = $this->categories()->where('category_id',$id)->first();
      if ($cat != false)
      {
        return true;
      }
      else
      {
        return false;
      }
    }
}
