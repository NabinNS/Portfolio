<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Models\Post;
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
    public function postspage(){
        $posts = Post::paginate(12);
        return view('frontend.posts',compact('posts'));
    }
    public function viewfullpost($id){
        $post = Post::findOrFail($id);
        return view('frontend.viewfullpost',compact('post'));
    }
 
}
