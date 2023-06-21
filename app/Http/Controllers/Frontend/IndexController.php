<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Client;
use App\Models\Fun;
use App\Models\Portfolio;
use App\Models\Profile;
use App\Models\Resume;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $profile = Profile::first();
        $about = About::first();
        $services = Service::all();
        $clients = Client::all();
        $facts = Fun::all();
        $testimonials = Testimonial::all();
        $portfolios = Portfolio::all();
        $resu = Resume::first();
        $educations=Resume::where('name','education')->limit(6)->get();
        $experiences=Resume::where('name','experience')->limit(6)->get();
        return view('frontend.index',compact('profile','about','services','clients','facts','testimonials','resu','educations','experiences','portfolios'));
    }

    public function Portfolio(){
        return view('frontend.portfolio_page');
    }

}


// $Testimonials=Testimonial::all();
// $services=Service::all();
// $clients=Client::all();
// $facts=Fact::all();
// $educations=Resume::where('type','Education')->limit(3)->get();
// $experiences=Resume::where('type','Education')->limit(3)->get();
