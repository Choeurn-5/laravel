<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::get('about',function(){
//     return "<h1> hello</h1>";
// });
// Route::get('contact',function(){
//     return "this is contact page";
// });
        


//     //grouping route

// Route::group(['prefix'=>'customer'],function(){
//     Route::get('/',function(){
//         return "<h2>This is customer page </h2>";
//     });
//     Route::get('create',function(){
//         return "<h2>This is create page </h2>";
//     });
//     Route::get('list',function(){
//         return "<h2>This is customer list pages </h2>";
//     });
// });

//         //route fallback

// Route::fallback(function(){
//     return "Page doesn't exist";
// });

// Route::get('/abouts',function(){
//     $about="Hello from aboutssss";
//     $about2="about 2";
//     return view('about',compact('about','about2'));
// });
// Route::get('/call',function(){
//     return view ('contact');
// });

// Route::get('/index',function(){
//     return view('about.index');
// });
// Route::get('/home',function(){
//     return view('home');
// });


Route::get('/home',HomeController::class);
Route::get('/login',[LoginController::class,'index'])->name('login');
Route::post('/login',[LoginController::class,'handleLogin'])->name('login.submit');



