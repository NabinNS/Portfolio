<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LogicController extends Controller
{
    public function savePost(Request $request) //function to add Post to the database
    {
        // dd($request->all());

        Post::create([
            'title' => $request->title,
            'post' => nl2br($request->post),
            'datePosted' => Carbon::now(),
        ]);
        return back()->with('success', 'New post recorded successfully');
    }

    public function editPost($id)
    {
        $post =  Post::findorFail($id);
        return view('backend.editPost', compact('post'));
    }

    public function updatePost(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required|string|max:255',
        //     'story' => 'required|string',
        // ]);
        $post = Post::findOrFail($id);
        $post->update([
            'title' => $request->title,
            'post' => nl2br($request->post),
        ]);
        return redirect()->route('admin.post')->with('success', 'Post updated successfully');
    }
    public function deletePost($id)
    {
        $post = Post::findOrFail($id);

        $post->delete();
        return redirect()->route('admin.post')->with('success', 'Post deleted successfully');
    }
}
