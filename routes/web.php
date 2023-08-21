<?php

use App\Http\Controllers\frontend\NavigationController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [NavigationController::class, 'homepage'] )->name('home');
Route::get('/bio', [NavigationController::class, 'biopage'] )->name('bio');
Route::get('/contact', [NavigationController::class, 'contactpage'] )->name('contact');
Route::get('/about', [NavigationController::class, 'aboutpage'] )->name('about');