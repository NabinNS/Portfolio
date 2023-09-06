<?php

use App\Http\Controllers\backend\HomeController;
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
//backend home controlling routes
Route::post('/admin/update/home',[HomeController::class,'updateHome'])->name('admin.updatehome');
Route::post('/admin/service/add',[HomeController::class,'addService'])->name('admin.addservice');

//Backend story control routes
Route::get('/story/save', [LogicController::class, 'saveStory'])->name('admin.savestory');
Route::get('/story/edit/{id}', [LogicController::class, 'editStory'])->name('admin.editstory');
Route::put('/story/update/{id}', [LogicController::class, 'updateStory'])->name('admin.updatestory');
Route::get('/story/delete/{id}', [LogicController::class, 'deleteStory'])->name('admin.deletestory');




Route::get('/admin/login', [NavController::class, 'loginpage'])->name('admin.login');
