<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Detail;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function updateDetails(Request $request)
    {
        // Try to find the first detail record
        $detail = Detail::first();

        if (!$detail) {
            // If no detail record exists, create a new one
            $detail = new Detail();
        }

        // Update the fields with the data from the request
        $detail->address = $request->address;
        $detail->number = $request->number;
        $detail->email = $request->email;
        $detail->facebook = $request->facebook;
        $detail->instagram = $request->instagram;
        $detail->youtube = $request->youtube;

        // Save the detail record
        $detail->save();

        return redirect()->route('admin.setting')->with('success', 'Information updated successfully');
    }
}
