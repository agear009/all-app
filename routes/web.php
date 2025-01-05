<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RegisterController;

Route::get('/index', function () {
    return view('welcome');
});

Route::get('/',[PageController::class,'index']);
Route::get('/produkpage',[PageController::class,'produk']);
Route::get('/beritapage',[PageController::class,'berita']);
Route::get('/login',[LoginController::class,'index']);
Route::post('/login-check', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::resource('/register',\App\Http\Controllers\RegisterController::class);



Route::group(["middleware"=>["auth"]],function(){


Route::resource('/admin',\App\Http\Controllers\AdminController::class);
Route::resource('/user',\App\Http\Controllers\UsersController::class);
Route::resource('/post',\App\Http\Controllers\PostController::class);
Route::resource('/produk',\App\Http\Controllers\ProdukController::class);
Route::resource('/asetkantor',\App\Http\Controllers\AsetKantorController::class);
Route::resource('/berita',\App\Http\Controllers\BeritaController::class);
Route::resource('/kategori',\App\Http\Controllers\KategoriController::class);
Route::resource('/notification',\App\Http\Controllers\NotificationController::class);
Route::resource('/gudang',\App\Http\Controllers\GudangController::class);
Route::resource('/order',\App\Http\Controllers\OrderController::class);
Route::resource('/order_user',PageController::class,[
                'only' => ['order'], // Menentukan metode yang diinginkan
                'parameters' => ['posts' => 'slug'] // Mengubah nama parameter
]);



});
