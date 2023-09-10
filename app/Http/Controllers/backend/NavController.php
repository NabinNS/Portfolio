<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Service;
use App\Models\User;

class NavController extends Controller
{
    public function homepage()
    {
        $services = Service::all();
        $user = User::first();
        return view('backend.home', compact('services', 'user'));
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
