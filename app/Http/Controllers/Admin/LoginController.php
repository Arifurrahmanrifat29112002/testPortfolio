<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Mail\ForgotPassword;
use App\Models\Admin\Login;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class LoginController extends Controller
{
    public function login()
    {
        return view('admin.auth.login');
    }
    public function register()
    {
        if(session()->has('loggedInUser')) {
            return redirect('/admin');
        } else {
            return view('admin.auth.register');
        }
    }
    public function forgotPass()
    {
        if(session()->has('loggedInUser')) {
            return redirect('/admin');
        } else {
            return view('admin.auth.forgot');
        }
    }
    public function resetPass(Request $request)
    {
        $email = $request->email;
        $token = $request->token;
        return view('admin.auth.reset', ['email' => $email, 'token' => $token]);
    }

    // Handle registerUser ajax request
    public function registerUser(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:logins|max:100',
            'password' => 'required|min:6|max:50',
            'cpassword' => 'required|same:password'
        ],[
            'cpassword.same' => 'Password did not match!',
            'cpassword.required' => 'Confirm password is required!'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag(),
            ]);
        }else {
            $user = new Login();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            return response()->json([
                'status' => 200,
                'messages' => 'Registered Successfully!',
            ]);

        }
    }
    // Handle loginUser ajax request
    public function loginUser(Request $request)
    {
        // print_r($_POST);
        $validator = Validator::make($request->all(),[
            'email' => 'required|email|max:100',
            'password' => 'required|min:6|max:50',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag(),
            ]);
        } else {
            $user = Login::where('email', $request->email)->first();
            if($user){
                if(Hash::check($request->password, $user->password)) {
                   $request->session()->put('loggedInUser', $user->id);
                   return response()->json([
                        'status' => 200,
                        'messages' => 'success',
                   ]); 
                } else {
                    return response()->json([
                       'status' => 401,
                       'messages' => 'E-mail or Password is incorrect!',
                    ]);
                }
            } else {
                return response()->json([
                    'status' => 401,
                    'messages' => 'User not found!',
                ]);
            }
        }
    }
    // Admin Page 
    public function index()
    {
        $data = ['userInfo' => DB::table('logins')->where('id', session('loggedInUser'))->first()];

        return view('admin', $data);
    }

    // logout
    public function logout()
    {
        if(session()->has('loggedInUser')){
            session()->pull('loggedInUser');
            
            return redirect('/login');
            
        }
    }


    // handle forgot password ajax request
    public function forgotPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email|max:100',
        ]);

        if($validator->fails()) {
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag(),
            ]);
        } else {
            $token = Str::uuid();
            $user = DB::table('logins')->where('email', $request->email)->first();
            $details = [
                'body' => route('reset', ['email' => $request->email, 'token' => $token])
            ];

            if($user){
                Login::where('email', $request->email)->update([
                    'token' => $token,
                    'token_expire' => Carbon::now()->addMinutes(10)->toDateTimeString(),
                ]);

                Mail::to($request->email)->send(new ForgotPassword($details));
                return response()->json([
                    'status' => 200,
                    'messages' => 'Reset password link has been sent to your E-mail!',
                ]);
            }
            else{
                return response()->json([
                    'status' => 401,
                    'messages' => 'This is not a registered E-mail!',
                ]);
            }
        }
    }

    //handle reset password ajax request
    public function resetPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'npass' => 'required|min:6|max:50',
            'cnpass' => 'required|min:6|max:50|same:npass'
        ], [
            'cnpass.same' => 'Password did not match'
        ]);

        if($validator->fails()){
            return response()->json([
                'status' => 400,
                'messages' => $validator->getMessageBag(),
            ]);
        } else {
            $user = DB::table('logins')->where('email', $request->email)
            ->whereNotNull('token')
            ->where('token', $request->token)
            ->where('token_expire', '>', Carbon::now())
            ->exists();

            if($user){
                Login::where('email', $request->email)->update([
                    'password' => Hash::make($request->npass),
                    'token' => null,
                    'token_expire' => null
                ]);

                return response()->json([
                    'status' => 200,
                    'messages' => 'New password updated!&nbsp;&nbsp;<a href="/">Login Now</a>'
                ]);
            } else {
                return response()->json([
                    'status' => 401,
                    'messages' => 'Reset link expired! Request for a new reset password link'
                ]);
            }
        }
    } 
}
