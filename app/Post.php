<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
  public function user() {
    return $this->belongsTo('App\User');
  }

  public function getShortBodyAttribute($value) {
    return Str::words($this->body, 40, ' ...');
  }

}
