<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Testimonial;
use App\Models\Car;
use App\Models\Category;
use  App\Models\Contact;

class RentController extends Controller
{
      public function index(){
        $cars =Car::take(6)->get();       
        return view('User.index',compact('cars'));
    }
    public function about(){
        return view("User.about");
    }
    public function cars(){
        $cars=Car::all();
        $testimonials= Testimonial::take(3)->get();  
        return view("User.cars",compact('cars','testimonials'));
    }
    public function contact(){
        return view("User.contact");
    }
    public function blog(){
        return view("User.blog");
    }
    public function testimonial (){
        $testimonials= testimonial::all();
        return view("User.testimonials", compact('testimonials'));
    }
   
}

