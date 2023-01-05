<?php

use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\BlogController;
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

Route::get('/beranda', function () {
    return view('template.beranda');
});

//pruduk
Route::get('/product', function () {return view('produk.produk');});
Route::get('/produk',[ProdukController::class,'produk'])->name('produk');
Route::get('/detail',[ProdukController::class,'detail'])->name('detail');
// Blog
Route::get('/blog', [BlogController::class, 'blog']);

Route::get('/product', function () {
    return view('produk.produk');
});

Route::get('/', [LandingpageController::class, 'home']);


//Kategori
Route::get('/kategori',[KategoriController::class,'index'])->name('index.kategori');
