<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function homepage(){
        return view('frontend.home');
    }
    public function biopage(){
        return view('frontend.bio');
    }
    public function contactpage(){
        return view('frontend.contact');
    }
    public function aboutpage(){
        return view('frontend.about');
    }
 
}
