<?php

use App\Http\Controllers\Admin\KategoriController as AdminKategoriController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Landing\KategoriController;
use App\Http\Controllers\Landing\p;
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
/////////////////////////// START ROUTE LANDING PAGE /////////////////////
//login

// berandah admin
Route::get('/beranda', function () {
    return view('dashboardadmin.beranda');
});

//pruduk
Route::get('/produk',[ProdukController::class,'produk'])->name('produk');
Route::get('/detail',[ProdukController::class,'detail'])->name('detail');

// Blog
Route::get('/blog', [AdminBlogController::class, 'blog']);
Route::get('/detailblog', [AdminBlogController::class, 'detailblog']);

Route::get('/test', function () {
    return view('landingpage.testsofyan');
});

Route::get('/', [LandingpageController::class, 'home']);
//Kategori
Route::get('/kategori',[KategoriController::class,'index'])->name('index.kategori');
/////////////////////////// END ROUTE LANDING PAGE /////////////////////
