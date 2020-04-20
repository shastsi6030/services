<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About_us extends Model
{
    protected $guarded = ['id'];

  public function photos()
  {
      return $this->hasMany(AboutPhoto::class);
  }
}
