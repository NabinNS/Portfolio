<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function updateHome(Request $request)
    {

        $user = User::first();

        // Check if a new profile photo has been uploaded
        if ($request->hasFile('profilephoto')) {
            $profilephoto = 'shraddha-home.' . $request->profilephoto->extension();
            $request->profilephoto->move(public_path('images'), $profilephoto);

            $user->imagePath = $profilephoto;
        }
        // No new profile photo uploaded, update only the description

        $user->description = nl2br($request->description);
        $user->save();


        return redirect()->route('admin.home')->with('success', 'Information updated successfully');
    }
    public function addService(Request $request){
        $logo = $request->title.'.'.$request->logo->extension();
        $request->logo->move(public_path('images'), $logo);
        Service::create([
            'logoPath' => $logo,
            'title' => $request->title,
            'description' => $request->description
        ]);
        return redirect()->route('admin.home')->with('success', 'Service added successfully');
    }
}
