<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Bio;
use App\Models\Post;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;

class NavigationController extends Controller
{
    public function homepage()
    {
        $services = Service::all();
        $user = User::first();
        return view('frontend.home', compact('services', 'user'));
    }
    public function biopage()
    {
        $bios = Bio::all();
        return view('frontend.bio',compact('bios'));
    }
    public function contactpage()
    {
        return view('frontend.contact');
    }
    public function postspage()
    {
        $posts = Post::paginate(12);
        return view('frontend.posts', compact('posts'));
    }
    public function viewfullpost($id)
    {
        $post = Post::findOrFail($id);
        return view('frontend.viewfullpost', compact('post'));
    }
}
