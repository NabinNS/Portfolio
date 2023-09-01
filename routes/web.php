<?php

use App\Http\Controllers\backend\LogicController;
use App\Http\Controllers\backend\NavController;
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


Route::get('/', [NavigationController::class, 'homepage'])->name('home');
Route::get('/bio', [NavigationController::class, 'biopage'])->name('bio');
Route::get('/contact', [NavigationController::class, 'contactpage'])->name('contact');
Route::get('/about', [NavigationController::class, 'aboutpage'])->name('about');


//backend route
Route::get('/admin/home', [NavController::class, 'homepage'])->name('admin.home');
Route::get('/admin/setting', [NavController::class, 'settingpage'])->name('admin.setting');
Route::get('/admin/story', [NavController::class, 'storypage'])->name('admin.story');
//add story to db
Route::get('/story/save', [LogicController::class, 'saveStory'])->name('admin.savestory');


Route::get('/admin/contact', [NavController::class, 'contactpage'])->name('admin.contact');
Route::get('/admin/login', [NavController::class, 'loginpage'])->name('admin.login');
