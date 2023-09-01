<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;

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
        return view('backend.story');
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
