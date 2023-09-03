<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Story;
use Illuminate\Http\Request;

class LogicController extends Controller
{
    public function saveStory(Request $request) //function to add story to the database
    {
        // dd($request->all());

        Story::create([
            'title' => $request->title,
            'story' => nl2br($request->story)
        ]);
        return back()->with('success', 'New story recorded successfully');
    }

    public function editStory($id)
    {
        $story =  Story::findorFail($id);
        return view('backend.editStory', compact('story'));
    }

    public function updateStory(Request $request, $id)
    {
        // $validatedData = $request->validate([
        //     'title' => 'required|string|max:255',
        //     'story' => 'required|string',
        // ]);
        $story = Story::findOrFail($id);
        $story->update([
            'title' => $request->title,
            'story' => nl2br($request->story),
        ]);
        return redirect()->route('admin.story')->with('success', 'Story updated successfully');
    }
    public function deleteStory($id)
    {
        $story = Story::findOrFail($id);

        $story->delete();
        return redirect()->route('admin.story')->with('success', 'Story deleted successfully');
    }
}
