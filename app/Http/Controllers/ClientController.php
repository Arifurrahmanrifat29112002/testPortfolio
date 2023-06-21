<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ClientController extends Controller
{
    public function Index(){
        $clients = Client::latest()->get();
        return view('admin.client.index',compact('clients'));
    }

    public function Add(){
        return view('admin.client.add');
    }

    public function Store(Request $request){
        $request->validate([
             'client_img' => 'required',
             'client_link' => 'required'
        ],[
            'client_img.required' => 'Please Input Your Image',
            'client_link.required' => 'Please Input Your client link'
        ]);

             $image = $request->file('client_img');
             $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            //  Image::make($image)->resize(166,110)->save('media/profile/'.$name_gen);
             Image::make($image)->save('media/client/'.$name_gen);
             $save_url = 'media/client/'.$name_gen;

             Client::insert([
                 'client_img' => $request->client_img,
                 'client_link' => $request->client_link,
                 'client_img' => $save_url,
                 'created_at' => Carbon::now(),
             ]);

             $notification=array(
                 'message'=>'Client  Upload Success',
                 'alert'=>'success'
             );
             return Redirect()->back()->with($notification);

    }

    //edit category-----------------------------------------------------
    public function Edit($id){
        $client = Client::findOrFail($id);
        return view('admin.client.edit',compact('client'));
    }

    //update Brand --------------------------------------
      public function Update(Request $request){ // zedi image update kora hoy tahoole ie ta
        $id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('client_img')) {
            unlink($old_img);
            $image = $request->file('client_img');
            $name_gen=hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            // Image::make($image)->resize(166,110)->save('media/profile/'.$name_gen);
            Image::make($image)->save('media/client/'.$name_gen);
            $save_url = 'media/client/'.$name_gen;

            Client::findOrFail($id)->update([
                'client_img' => $request->client_img,
                'client_link' => $request->client_link,
                'client_img' => $save_url,
                'created_at' => Carbon::now(),
            ]);

            $notification=array(
                'message'=>'Client Update Success',
                'alert'=>'success'
            );
            return Redirect()->route('service')->with($notification);
        }else {
        Client::findOrFail($id)->update([   // zodi image update na korea hoy tahole eitai thekbe

            'client_link' => $request->client_link,
            'created_at' => Carbon::now(),
        ]);

        $notification=array(
            'message'=>'Client  Update Success',
            'alert'=>'success'
        );
        return Redirect()->route('client')->with($notification);
        }

    }


       //delete brand
    public function delete($id){
        $client = Client::findOrFail($id);
        $img = $client->client_img;
        unlink($img);
        Client::findOrFail($id)->delete();
        $notification=array(
            'message'=>'Client  Delete Success',
            'alert'=>'success'
        );
    return Redirect()->back()->with($notification);
    }
}
