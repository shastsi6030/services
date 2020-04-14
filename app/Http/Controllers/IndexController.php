<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function main()
    {
        $header= slider::all() ?? new slider;

        return view("index")->with(compact('header'));
    }
}
