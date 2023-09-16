<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Bio;
use Illuminate\Http\Request;

class BioController extends Controller
{
    public function addBio(Request $request)
    {
        $photo = time() . '-' . $request->title . '-bio.' . $request->photo->extension();
        $request->photo->move(public_path('images'), $photo);
        Bio::create([
            'photoPath' => $photo,
            'title' => $request->title,
            'description' => nl2br($request->description)
        ]);
        return redirect()->route('admin.bio')->with('success', 'New bio added successfully');
    }
    public function updateBio(Request $request, $id)
    {
        $bio = Bio::findorFail($id);
        if ($request->hasFile('photo')) {
            $photo = time() . '-' . $request->title . '-bio.' . $request->photo->extension();
            $request->photo->move(public_path('images'), $photo);

            $bio->photoPath = $photo;
        }
        // No new profile photo uploaded, update only the description
        $bio->title = $request->title;
        $bio->description = nl2br($request->description);
        $bio->save();
        return redirect()->route('admin.bio')->with('success', 'Bio updated successfully');
    }
    public function deleteBio($id)
    {
        $bio = Bio::findOrFail($id);
        $bio->delete();
        return redirect()->route('admin.bio')->with('success', 'Bio deleted successfully');
    }
}
