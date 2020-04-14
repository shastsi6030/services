<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
   public function index(){
       return view("index");
   }
   public function admin(){
       return view("admin_n.index");
   }
}
