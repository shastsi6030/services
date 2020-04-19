<?php

namespace App\Http\Controllers;

use App\about_us;
use App\slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main()
    {
        $header= slider::all() ?? new slider;
        $about_us=about_us::first() ?? new about_us;

        return view("index")->with(compact('header', 'about_us'));
    }
}
