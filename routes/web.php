<?php

use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\KategoriController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdukController;

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
<<<<<<< HEAD
Route::get('/', function () {
    return view('index');
});
=======

// Route::get('/', function () {
//     return view('index');
// });
>>>>>>> 8dd8bac773f3d5e538945a7070bc1eca9755031a

//pruduk
Route::get('/product', function () {return view('produk.produk');});

// Blog
Route::get('/landingBlog', function () {return view('landingBlog.blog');});

Route::get('/product', function () {
    return view('produk.produk');
});

Route::get('/', [LandingpageController::class, 'home']);
Route::get('/produk',[ProdukController::class,'produk'])->name('produk');

//Kategori
Route::get('/kategori',[KategoriController::class,'index'])->name('index.kategori');
