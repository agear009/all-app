<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;

Route::get('/',[UsersController::class,'index']);
Route::get('/post',[PostController::class,'index']);
Route::get('/page',[PageController::class,'index']);
Route::get('/index', function () {
    return view('welcome');
});


Route::resource('/post',\App\Http\Controllers\PostController::class);