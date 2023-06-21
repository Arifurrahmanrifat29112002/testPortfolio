<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function Index(){
        $services = Service::latest()->get();
        return view('admin.service.index',compact('services'));
    }

    public function Add(){
        return view('admin.service.add');
    }

    public function Store(Request $request){
        $request->validate([
             'service_img' => 'required',
             'service_title' => 'required',
             'service_dec' => 'required'
        ],[
            'service_img.required' => 'Please Input Your Image',
            'service_title.required' => 'Please Input Your Services Title',
            'service_dec.required' => 'Please Input Your Service Description'
        ]);

             $image = $request->file('service_img');
             $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            //  Image::make($image)->resize(166,110)->save('media/profile/'.$name_gen);
             Image::make($image)->save('media/service/'.$name_gen);
             $save_url = 'media/service/'.$name_gen;

             Service::insert([
                 'service_img' => $request->service_img,
                 'service_title' => $request->service_title,
                 'service_dec' => $request->service_dec,
                 'service_img' => $save_url,
                 'created_at' => Carbon::now(),
             ]);

             $notification=array(
                 'message'=>'Service  Upload Success',
                 'alert'=>'success'
             );
             return Redirect()->back()->with($notification);

    }

    //edit category-----------------------------------------------------
    public function Edit($id){
        $service = Service::findOrFail($id);
        return view('admin.service.edit',compact('service'));
    }

    //update Brand --------------------------------------
      public function Update(Request $request){ // zedi image update kora hoy tahoole ie ta
        $id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('service_img')) {
            unlink($old_img);
            $image = $request->file('service_img');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            // Image::make($image)->resize(166,110)->save('media/profile/'.$name_gen);
            Image::make($image)->save('media/service/'.$name_gen);
            $save_url = 'media/service/'.$name_gen;

            Service::findOrFail($id)->update([
                'service_img' => $request->service_img,
                'service_title' => $request->service_title,
                'service_dec' => $request->service_dec,
                'service_img' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification=array(
                'message'=>'Service Update Success',
                'alert'=>'success'
            );
            return Redirect()->route('service')->with($notification);
        }else {
        Service::findOrFail($id)->update([   // zodi image update na korea hoy tahole eitai thekbe
            'service_img' => $request->service_img,
            'service_title' => $request->service_title,
            'service_dec' => $request->service_dec,
            'created_at' => Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Service  Update Success',
            'alert'=>'success'
        );
        return Redirect()->route('service')->with($notification);
        }

    }


       //delete brand
    public function delete($id){
        $service = Service::findOrFail($id);
        $img = $service->service_img;
        unlink($img);
        Service::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Service  Delete Success',
            'alert'=>'success'
        );
    return Redirect()->back()->with($notification);
    }
}
