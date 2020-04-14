<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValidationController extends Controller
{
    public static function sliders(){
        return request()->validate([
            "title"=>"string | between:4,100 | required ",
            "description"=>"string | required ",
            "btn_name"=>"string | between:3,100 | required ",
            "btn_link"=>"string | between:8,100 | required ",
            "image"=>"string  | required ",
            "show"=>"integer  | required ",
        ]);
    }
}
