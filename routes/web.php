<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/admin',[UsersController::class,'index']);
Route::get('/page',[PageController::class,'index']);
Route::get('/login',[LoginController::class,'index']);
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/index', function () {
    return view('welcome');
});


Route::resource('/post',\App\Http\Controllers\PostController::class);
