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
            $profilephoto = 'shraddha-home.png';
            if (file_exists(public_path('images') . '/' . $profilephoto)) {
                // If it exists, delete it
                unlink(public_path('images') . '/' . $profilephoto);
            }
            $request->profilephoto->move(public_path('images'), $profilephoto);

            $user->imagePath = $profilephoto;
        }
        // No new profile photo uploaded, update only the description

        $user->description = nl2br($request->description);
        $user->save();


        return redirect()->route('admin.home')->with('success', 'Information updated successfully');
    }
    public function addService(Request $request)
    {
        $logo = time() . '-' . $request->title . '.' . $request->logo->extension();
        $request->logo->move(public_path('images'), $logo);
        Service::create([
            'logoPath' => $logo,
            'title' => $request->title,
            'description' => nl2br($request->description)
        ]);
        return redirect()->route('admin.home')->with('success', 'Service added successfully');
    }
    public function deleteService($id)
    {
        $service = Service::findOrFail($id);
        $logoPath = $service->logoPath;
        unlink(public_path('images') . '/' . $logoPath);
        $service->delete();
        return redirect()->route('admin.home')->with('success', 'Service deleted successfully');
    }
    public function editService($id)
    {
        $service = Service::findOrFail($id);
        return view('backend.editService', compact('service'));
    }
    public function updateService(Request $request, $id)
    {

        $service = Service::findOrFail($id);

        // Check if a new profile photo has been uploaded
        if ($request->hasFile('logo')) {
            $logo = time() . '-' . $request->title . '.' . $request->logo->extension();
            $request->logo->move(public_path('images'), $logo);
            $service->logoPath = $logo;
            unlink(public_path('images') . '/' . $request->prevphoto);
        }
        // No new profile photo uploaded, update only the description

        $service->title = $request->title;
        $service->description = nl2br($request->description);
        $service->save();


        return redirect()->route('admin.home')->with('success', 'Information updated successfully');
    }
}
