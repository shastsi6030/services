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
            "image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000   ",
            "show"=>"integer  | required ",
        ]);
    }

    public static function about_us(){
        return request()->validate([
            "head"=>"string | between:4,100 | required ",
            "head_text"=>"string | required ",
            "btn_name"=>"string | between:3,100 | required ",
            "btn_link"=>"string | between:8,100 | required ",
            "red_text"=>"string | between:8,100 | required ",
            "main_image"=>"image | mimes:jpg,jpeg,png,tiff | max:2000   ",
            "text"=>"string  | required ",
        ]);
    }
}
