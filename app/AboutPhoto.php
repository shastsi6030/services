<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AboutPhoto extends Model
{
    protected $guarded = ['id'];

    public static function make($image){
        $photo=new self;
        $photo->image=$image;
        $photo->save();
    }
}
