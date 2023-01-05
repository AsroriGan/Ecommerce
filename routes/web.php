<?php

use App\Http\Controllers\Landing\KategoriController as LandingKategoriController;
use App\Http\Controllers\LandingpageController;
<<<<<<< HEAD
use App\Http\Controllers\Admin\BlogController as AdminBlogController;
use App\Http\Controllers\Landing\KategoriController;
use App\Http\Controllers\Landing\Logincontroller;
use App\Http\Controllers\Landing\p;
=======
use App\Http\Controllers\Landing\BlogController as LandingBlogController;
use App\Http\Controllers\Landing\PromoController as LandingPromoController;
>>>>>>> 102de75b4dd962d30ec4b52c0c20097a454bec48
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
Route::get('/login',[Logincontroller::class,'login'])->name('login');
//register
Route::get('/register',[Logincontroller::class,'register'])->name('register');

// berandah admin
Route::get('/beranda', function () {
    return view('dashboardadmin.beranda');
});

//pruduk
Route::get('/produk',[ProdukController::class,'produk'])->name('produk');
Route::get('/detail',[ProdukController::class,'detail'])->name('detail');

// Blog
Route::get('/blog', [LandingBlogController::class, 'blog']);
Route::get('/detailblog', [LandingBlogController::class, 'detailblog']);

// promo
Route::get('/promo', [LandingPromoController::class, 'promo']);


Route::get('/test', function () {
    return view('landingpage.testsofyan');
});

Route::get('/', [LandingpageController::class, 'home']);
//Kategori
Route::get('/kategori',[LandingKategoriController::class,'index'])->name('index.kategori');
/////////////////////////// END ROUTE LANDING PAGE /////////////////////
