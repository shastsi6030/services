<?php

namespace App\Http\Controllers;

use App\About_us;
use App\AboutPhoto;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function index()
    {
       $about= About_us::first();
       return view("admin_n.about_us")->with(compact('about'));
    }





    public function edit()
    {
        $about= About_us::find(1);

        return view("admin_n.aboutus_form")->with(compact('about'));
    }


    public function update(Request $request, About_us $about_us)
    {
        $about= About_us::find(1);
$data=$request->validate([
    'head'=>'nullable',
    'head_text'=>'nullable',
    'text'=>'nullable',
    'btn_name'=>'nullable',
    'btn_link'=>'nullable',
    'main_photo'=>'nullable',
    'sentences'=>'nullable',
]);

        if ($image=$request->main_image){

            $photo= $request->file('main_image');

            $data['main_photo']= do_upload($photo);


        }
        if ($offers=$request->images){
            foreach ($offers as $offer){
                $image=do_upload($offer);
                AboutPhoto::make($image);

            }
        }
        $update=$about->update($data);

            if($update){




            return redirect("app/cmsadmin/admin/aboutus");

        }
        else{
            return back()->withMessage();
        }
    }


}
