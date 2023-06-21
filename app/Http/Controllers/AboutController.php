<?php

namespace App\Http\Controllers;

use App\Models\About;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function Index(){
        $abouts = About::latest()->get();
        return view('admin.about.index',compact('abouts'));
    }

    public function Add(){
        return view('admin.about.add');
    }

    public function Store(Request $request){
        $request->validate([
             'title' => 'required',
             'header' => 'required',
             'description' => 'required'
        ],[
            'title.required' => 'Please Input Your Title',
            'header.required' => 'Please Input Your Header',
            'description.required' => 'Please Input Your Description'
        ]);
        About::insert([
            'title' => $request->title,
            'header' => $request->header,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        $notification=array(
            'message'=>'About Upload Success',
            'alert'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    //edit category-----------------------------------------------------
    public function Edit($id){
        $about = About::findOrFail($id);
        return view('admin.about.edit',compact('about'));
    }

    //update Brand --------------------------------------
      public function Update(Request $request){ // zedi image update kora hoy tahoole ie ta
        $id = $request->id;
        About::findOrFail($id)->update([   // zodi image update na korea hoy tahole eitai thekbe
            'title' => $request->title,
            'header' => $request->header,
            'description' => $request->description,
            'created_at' => Carbon::now(),
        ]);

        $notification=array(
            'message'=>'About  Update Success',
            'alert'=>'success'
        );
        return Redirect()->route('about')->with($notification);
    }


       //delete brand
    public function delete($id){
        $about = About::findOrFail($id);
        About::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Profile  Delete Success',
            'alert'=>'success'
        );
    return Redirect()->back()->with($notification);
    }
}
