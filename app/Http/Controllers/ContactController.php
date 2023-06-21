<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function Store(Request $request){

        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        $send_mail = "njfaiaz@gmail.com";




        $contact_form_data = request()->all();
        Mail::to($send_mail)->send(new ContactFormMail($name,$email,$message));

        $notification=array(
            'message'=>'Your message has been submitted successfully',
            'alert'=>'success'
        );
        return redirect()->route('frontend.index','/#contact')->with($notification);
    }
}
