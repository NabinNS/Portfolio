<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Story;

class NavController extends Controller
{
    public function homepage()
    {
        return view('backend.home');
    }

    public function settingpage()
    {
        return view('backend.setting');
    }

    public function storypage()
    {
        $stories = Story::all();
        return view('backend.story', compact('stories'));
    }
    

    public function contactpage()
    {
        return view('backend.contact');
    }

    public function loginpage()
    {
        return view('backend.login');
    }
}
