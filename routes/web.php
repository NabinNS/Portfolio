<?php

use App\Http\Controllers\backend\BioController;
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
Route::get('/posts', [NavigationController::class, 'postspage'])->name('posts');
//route to show full post 
Route::get('/viewfullpost/{id}', [NavigationController::class, 'viewfullpost'])->name('viewfullpost');


//backend route
Route::get('/admin/home', [NavController::class, 'homepage'])->name('admin.home');
Route::get('/admin/setting', [NavController::class, 'settingpage'])->name('admin.setting');
Route::get('/admin/post', [NavController::class, 'postpage'])->name('admin.post');
Route::get('/admin/bio', [NavController::class, 'biopage'])->name('admin.bio');
//backend home controlling routes
Route::post('/admin/update/home',[HomeController::class,'updateHome'])->name('admin.updatehome');
Route::post('/admin/service/add',[HomeController::class,'addService'])->name('admin.addservice');

//Backend story control routes
Route::get('/post/save', [LogicController::class, 'savePost'])->name('admin.savepost');
Route::get('/post/edit/{id}', [LogicController::class, 'editPost'])->name('admin.editpost');
Route::put('/post/update/{id}', [LogicController::class, 'updatePost'])->name('admin.updatepost');
Route::get('/post/delete/{id}', [LogicController::class, 'deletePost'])->name('admin.deletepost');

//Backed Bio control routes
Route::post('/bio/save', [BioController::class, 'addBio'])->name('admin.addbio');
Route::post('/bio/update/{id}', [BioController::class, 'updateBio'])->name('admin.updatebio');
Route::get('/bio/delete/{id}', [BioController::class, 'deleteBio'])->name('admin.deletebio');





Route::get('/admin/login', [NavController::class, 'loginpage'])->name('admin.login');
