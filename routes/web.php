<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/',[PageController::class,'index']);
Route::get('/produk',[PageController::class,'produk']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login-check', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::resource('/register',\App\Http\Controllers\RegisterController::class);



Route::group(["middleware"=>["auth"]],function(){

Route::resource('/admin',\App\Http\Controllers\UsersController::class);
Route::resource('/user',\App\Http\Controllers\UsersController::class);
Route::resource('/post',\App\Http\Controllers\PostController::class);
Route::resource('/produk',\App\Http\Controllers\PostController::class);

});
