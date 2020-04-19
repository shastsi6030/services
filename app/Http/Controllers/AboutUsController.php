<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about_us;

class AboutUsController extends Controller
{
    public function __cunstruct(){
        $this->middleware('admin');
    }


    public function index()
    {
        $about_us= about_us::first();
        return view('admin_n.about_us')->with(compact('about_us'));
    }







    public function show(about_us $about_us)
    {
        //
    }


    public function edit(about_us $about_us)
    {
        $about_us= about_us::first();
        return view('admin_n.aboutus_form')->with(compact('about_us'));
    }


    public function update(Request $request, about_us $about_us)
    {
        $data=ValidationController::about_us();

        if ($image=$request->main_image){

            $photo= $request->file('main_image');

            $data['main_image']= do_upload($photo);


        }

       $update=$about_us->update();
     dd($update);
        if($update){




            return redirect("app/cmsadmin/admin/about_us");

        }
        else{
            return back()->withMessage();
        }
    }


    public function destroy(about_us $about_us)
    {
        $about_us->delete();
        return redirect("app/cmsadmin/admin/about_us");
    }
}
