<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Barryvdh\DomPDF\Facade\Pdf;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;
use Illuminate\Http\Request;

class ProfileController extends Controller
{

    public function Index(){
        $profiles = Profile::latest()->get();
        return view('admin.profile.index',compact('profiles'));
    }

    public function Add(){
        return view('admin.profile.add');
    }

    public function Store(Request $request){
        $request->validate([
             'name' => 'required',
             'designation' => 'required',
             'profile' => 'required',
             'github' => 'required',
             'resume' => 'required',
             'linkedin' => 'required',
             'facebook' => 'required',
             'get_in_touch' => 'required',
             'location' => 'required',
             'email' => 'required',
             'number' => 'required',
             'Freelance' => 'required',
             'title' => 'required'
        ],[
            'name.required' => 'Please Input Your Full Name',
            'designation.required' => 'Please Input Your Designation',
            'profile.required' => 'Please Input Your profile',
            'github.required' => 'Please Input Your github',
            'linkedin.required' => 'Please Input Your linkedin',
            'facebook.required' => 'Please Input Your facebook',
            'get_in_touch.required' => 'Please Input Your get_in_touch',
            'location.required' => 'Please Input Your location',
            'email.required' => 'Please Input Your email',
            'number.required' => 'Please Input Your number',
            'Freelance.required' => 'Please Input Your Freelance',
            'title.required' => 'Please Input Your Freelance'
        ]);

             $image = $request->file('profile');
             $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
             Image::make($image)->resize(166,110)->save('media/profile/'.$name_gen);
             Image::make($image)->save('media/profile/'.$name_gen);
             $save_url = 'media/profile/'.$name_gen;

            //  $cv = $request->file('resume');
            //  $cv_gen=hexdec(uniqid()).'.'.$cv->getClientOriginalExtension();
            // //  Image::make($cv)->resize(166,110)->save('media/cv/'.$name_gen);
            //  Pdf::make($cv)->save('media/cv/'.$cv_gen);
            //  $save_url = 'media/cv/'.$cv_gen;


             Profile::insert([
                 'name' => $request->name,
                 'designation' => $request->designation,
                 'profile' => $request->profile,
                 'github' => $request->github,
                 'linkedin' => $request->linkedin,
                 'facebook' => $request->facebook,
                 'get_in_touch' => $request->get_in_touch,
                 'location' => $request->location,
                 'email' => $request->email,
                 'number' => $request->number,
                 'Freelance' => $request->Freelance,
                 'title' => $request->title,
                 'resume' => $request->resume,
                 'profile' => $save_url,
                 'created_at' => Carbon::now(),
             ]);

             $notification=array(
                 'message'=>'Profile  Upload Success',
                 'alert'=>'success'
             );
             return Redirect()->back()->with($notification);

    }

    //edit category-----------------------------------------------------
    public function Edit($id){
        $profile = Profile::findOrFail($id);
        return view('admin.profile.edit',compact('profile'));
    }

    //update Brand --------------------------------------
      public function Update(Request $request){ // zedi image update kora hoy tahoole ie ta
        $id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('profile')) {
            unlink($old_img);
            $image = $request->file('profile');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(166,110)->save('media/profile/'.$name_gen);
            Image::make($image)->save('media/profile/'.$name_gen);
            $save_url = 'media/profile/'.$name_gen;

            Profile::findOrFail($id)->update([
                'name' => $request->name,
                'designation' => $request->designation,
                'profile' => $request->profile,
                'github' => $request->github,
                'linkedin' => $request->linkedin,
                'facebook' => $request->facebook,
                'get_in_touch' => $request->get_in_touch,
                'location' => $request->location,
                'email' => $request->email,
                'number' => $request->number,
                'Freelance' => $request->Freelance,
                'title' => $request->title,
                'profile' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification=array(
                'message'=>'Profile Update Success',
                'alert'=>'success'
            );
            return Redirect()->route('profile')->with($notification);
        }else {
        Profile::findOrFail($id)->update([   // zodi image update na korea hoy tahole eitai thekbe
            'name' => $request->name,
            'designation' => $request->designation,
            'profile' => $request->profile,
            'github' => $request->github,
            'linkedin' => $request->linkedin,
            'facebook' => $request->facebook,
            'get_in_touch' => $request->get_in_touch,
            'location' => $request->location,
            'email' => $request->email,
            'number' => $request->number,
            'title' => $request->title,
            'Freelance' => $request->Freelance,
            'created_at' => Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Profile  Update Success',
            'alert'=>'success'
        );
        return Redirect()->route('profile')->with($notification);
        }

    }


       //delete brand
    public function delete($id){
        $profile = Profile::findOrFail($id);
        $img = $profile->profile;
        unlink($img);
        Profile::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Profile  Delete Success',
            'alert'=>'success'
        );
    return Redirect()->back()->with($notification);
    }

}


