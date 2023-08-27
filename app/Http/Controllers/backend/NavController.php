<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NavController extends Controller
{
    public function homepage(){
        return view('backend.home');
    }
}
