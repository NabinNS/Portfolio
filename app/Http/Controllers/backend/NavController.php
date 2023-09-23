<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Bio;
use App\Models\Detail;
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
        $detail = Detail::first();
        return view('backend.setting', compact('detail'));
    }

    public function postpage()
    {
        $posts = Post::all();
        return view('backend.post', compact('posts'));
    }



    public function loginpage()
    {
        return view('backend.login');
    }
    public function biopage()
    {
        $bios = Bio::all();
        return view('backend.bio', compact('bios'));
    }
}
