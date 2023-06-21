<?php

namespace App\Http\Controllers;

use App\Models\Fun;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FunController extends Controller
{
    public function Index(){
        $funs = Fun::latest()->get();
        return view('admin.fun.index',compact('funs'));
    }

    public function Add(){
        return view('admin.fun.add');
    }

    public function Store(Request $request){
        $request->validate([
             'icon' => 'required',
             'icon_title' => 'required',
             'icon_time' => 'required'
        ],[
            'icon.required' => 'Please Input Your Clint Icon',
            'icon_title.required' => 'Please Input Your Clint Title',
            'icon_time.required' => 'Please Input Your Clint Time'
        ]);
        Fun::insert([
            'icon' => $request->icon,
            'icon_title' => $request->icon_title,
            'icon_time' => $request->icon_time,
            'created_at' => Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Fun Upload Success',
            'alert'=>'success'
        );
        return Redirect()->back()->with($notification);

    }

    //edit category-----------------------------------------------------
    public function Edit($id){
        $fun = Fun::findOrFail($id);
        return view('admin.fun.edit',compact('fun'));
    }

    //update Brand --------------------------------------
      public function Update(Request $request){ // zedi image update kora hoy tahoole ie ta
        $id = $request->id;
        Fun::findOrFail($id)->update([   // zodi image update na korea hoy tahole eitai thekbe
            'icon' => $request->icon,
            'icon_title' => $request->icon_title,
            'icon_time' => $request->icon_time,
            'created_at' => Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Fun  Update Success',
            'alert'=>'success'
        );
        return Redirect()->route('fun')->with($notification);
    }


       //delete brand
    public function delete($id){
        $about = Fun::findOrFail($id);
        Fun::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Fun  Delete Success',
            'alert'=>'success'
        );
    return Redirect()->back()->with($notification);
    }
}
