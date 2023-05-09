<?php

use App\Models\Blog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BlogsController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//show login page
Route::get("/login",[UserController::class,'login'])->name('login')->middleware('guest');


//show about-us page
Route::get("/about-us",function(){
    return view('/about-us');
});

//show register page
Route::get('/register',[UserController::class,'create'])->middleware('guest');

//logout user
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

//login post
Route::post('/users/authenticate',[UserController::class,'authenticate']);

//register user
Route::post('/users',[UserController::class,'store']);

//show all the blogs and the search
Route::get('/', [BlogsController::class,'index']);

//show create blog form
Route::get("/blogs/create",[BlogsController::class,'create'])->middleware('auth');

//edit blog
Route::get("/blogs/{blog}/edit",[BlogsController::class,'edit'])->middleware('auth');

Route::get("/secret-ni-chris",function(){
    return view('secret-ni-chris');
});

//update blog
Route::put('/blogs/{blog}',[BlogsController::class,'update'])->middleware('auth');

//delete blog
Route::delete('/blogs/{blog}',[BlogsController::class,'destroy'])->middleware('auth');
//show single blog
Route::get("/blogs/{blog}",[BlogsController::class,'show']);

//store a blog
Route::post("/blogs",[BlogsController::class,'store'])->middleware('auth');

Route::get("/secret-ni-chris",function(){
    return view('secret-ni-chris');
});
Route::get("/liham-ni-ginoong-reynaldo",function(){
    return view('liham-ni-ginooong-reynaldo');
});

Route::get("/letter-ni-jerv",function(){
    return view('letter-ni-jerv');
});
Route::get("/khen-message",function(){
    return view('khen-message');
});

Route::get("/confession-ni-juls",function(){
    return view('confession-ni-juls');
});

