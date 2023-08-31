<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function homepage(){
        return view('backend.home');
    }

    public function settingpage(){
        return view('backend.setting');
    }
    public function storypage(){
        return view('backend.story');
    }
}
