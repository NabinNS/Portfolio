<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;

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

    public function postpage()
    {
        $posts = Post::all();
        return view('backend.post', compact('posts'));
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
