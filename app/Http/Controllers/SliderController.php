<?php

namespace App\Http\Controllers;

use App\slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public $baseurl="app/cmsadmin/admin/sliders";

    public function __cunstruct(){
        $this->middleware('admin');
    }


    public function index()
    {
        $slider= slider::all();
        return view('admin_n.slider')->with(compact('slider'));
    }


    public function create(slider $slider)
    {

        return view('admin_n.slider_form')->with(compact('slider'));
    }


    public function store(Request $request)
    {
       // dd("here");
  $data=ValidationController::sliders();
        $photo= $request->file('image');
        $filename=$photo->getClientOriginalExtension();
        $filename= RandomString().".". $filename;
        $data['image']=$filename;
        $photo->move(base_path().'/storage/app/public',$filename);
  slider::create($data);
        HelperController::flash();
  return redirect("app/cmsadmin/admin/sliders");
    }


    public function show(slider $slider)
    {
        //
    }


    public function edit(slider $slider)
    {

        return view('admin_n.slider_form')->with(compact('slider'));
    }


    public function update(Request $request, slider $slider)
    {
       $data=ValidationController::sliders();
       if ($image=$request->image){
           if(file_exists($slider->image)){
               \File::delete($slider->image);
           }
           $photo= $request->file('image');
           $filename=$photo->getClientOriginalExtension();
           $filename= RandomString().".". $filename;
           $data['image']=$filename;
           $data['image']= $filename;
           $photo->move(base_path().'/storage/app/public',$filename);

       }

       $update=$slider->update($data);
       if($update){




           return redirect("app/cmsadmin/admin/sliders");

       }
       else{
           return back();
       }
    }


    public function destroy(slider $slider)
    {
        $slider->delete();
        return redirect("app/cmsadmin/admin/sliders");
    }
}
