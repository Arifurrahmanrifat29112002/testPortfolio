<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function Index(){
        $testimonials = Testimonial::latest()->get();
        return view('admin.testimonial.index',compact('testimonials'));
    }

    public function Add(){
        return view('admin.testimonial.add');
    }

    public function Store(Request $request){
        $request->validate([
             'testimonial' => 'required',
             'testimonial_img' => 'required',
             'testimonial_name' => 'required',
             'testimonial_title' => 'required'
        ],[
            'testimonial.required' => 'Please Input Your Full Testimonial',
            'testimonial_img.required' => 'Please Input Your Testimonial img',
            'testimonial_name.required' => 'Please Input Your Testimonial Name',
            'testimonial_title.required' => 'Please Input Your Testimonial Title'
        ]);

             $image = $request->file('testimonial_img');
             $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            //  Image::make($image)->resize(166,110)->save('media/profile/'.$name_gen);
             Image::make($image)->save('media/testimonial/'.$name_gen);
             $save_url = 'media/testimonial/'.$name_gen;

             Testimonial::insert([
                 'testimonial' => $request->testimonial,
                 'testimonial_name' => $request->testimonial_name,
                 'testimonial_title' => $request->testimonial_title,
                 'testimonial_img' => $save_url,
                 'created_at' => Carbon::now(),
             ]);

             $notification=array(
                 'message'=>'Testimonial  Upload Success',
                 'alert'=>'success'
             );
             return Redirect()->back()->with($notification);

    }

    //edit category-----------------------------------------------------
    public function Edit($id){
        $testimonial = Testimonial::findOrFail($id);
        return view('admin.testimonial.edit',compact('testimonial'));
    }

    //update Brand --------------------------------------
      public function Update(Request $request){ // zedi image update kora hoy tahoole ie ta
        $id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('testimonial_img')) {
            unlink($old_img);
            $image = $request->file('testimonial_img');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->save('media/testimonial/'.$name_gen);
            $save_url = 'media/testimonial/'.$name_gen;

            Testimonial::findOrFail($id)->update([
                'testimonial' => $request->testimonial,
                'testimonial_img' => $request->testimonial_img,
                'testimonial_name' => $request->testimonial_name,
                'testimonial_title' => $request->testimonial_title,
                'testimonial_img' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification=array(
                'message'=>'Testimonial Update Success',
                'alert'=>'success'
            );
            return Redirect()->route('testimonial')->with($notification);
        }else {
        Testimonial::findOrFail($id)->update([   // zodi image update na korea hoy tahole eitai thekbe
            'testimonial' => $request->testimonial,
            'testimonial_img' => $request->testimonial_img,
            'testimonial_name' => $request->testimonial_name,
            'testimonial_title' => $request->testimonial_title,
            'created_at' => Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Testimonial  Update Success',
            'alert'=>'success'
        );
        return Redirect()->route('testimonial')->with($notification);
        }

    }


       //delete brand
    public function delete($id){
        $testimonial = Testimonial::findOrFail($id);
        $img = $testimonial->testimonial_img;
        unlink($img);
        Testimonial::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Testimonial  Delete Success',
            'alert'=>'success'
        );
    return Redirect()->back()->with($notification);
    }
}
