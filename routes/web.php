<?php

use App\Http\Controllers\frontent\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/',[HomeController::class,'index'])->name('frontent.index');
Route::get('/about',[HomeController::class,'about'])->name('frontent.about');
Route::get('/services',[HomeController::class,'services'])->name('frontent.services');

//login
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::get('/login',[UserController::class,'login'])->name('login');
Route::post('/dologin',[UserController::class,'dologin'])->name('dologin');
Route::get('/signup',[UserController::class,'signup'])->name('signup');
Route::post('/signup/post',[UserController::class,'signup_post'])->name('signup.post');

