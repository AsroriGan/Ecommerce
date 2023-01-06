<?php

use App\Http\Controllers\Landing\KategoriController as LandingKategoriController;
<<<<<<< HEAD
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\Landing\Logincontroller;
=======
use App\Http\Controllers\Landing\Logincontroller as LandingLogincontroller;
use App\Http\Controllers\Landing\LandingpageController;
>>>>>>> 82e6b553d64c6d85499d25468c38b5a0740a319d
use App\Http\Controllers\Landing\BlogController as LandingBlogController;
use App\Http\Controllers\Landing\PromoController as LandingPromoController;
use App\Http\Controllers\Landing\ProdukController as LandingProdukController;
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
/////////////////////////// START ROUTE LANDING PAGE /////////////////////

//login
<<<<<<< HEAD
Route::get('/login', [Logincontroller::class, 'login'])->name('login');
//register
Route::get('/register', [Logincontroller::class, 'register'])->name('register');
=======
Route::get('/login', [LandingLogincontroller::class, 'login'])->name('login');

//register
Route::get('/register', [LandingLogincontroller::class, 'register'])->name('register');
>>>>>>> 82e6b553d64c6d85499d25468c38b5a0740a319d

// berandah admin
Route::get('/beranda', function () {
    return view('dashboardadmin.beranda');
});

//pruduk
<<<<<<< HEAD
Route::get('/produk', [ProdukController::class, 'produk'])->name('produk');
Route::get('/detail', [ProdukController::class, 'detail'])->name('detail');
=======
Route::get('/produk', [LandingProdukController::class, 'produk'])->name('produk');
Route::get('/detail', [LandingProdukController::class, 'detail'])->name('detail');
>>>>>>> 82e6b553d64c6d85499d25468c38b5a0740a319d

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
Route::get('/kategori', [LandingKategoriController::class, 'index'])->name('index.kategori');
<<<<<<< HEAD
=======

>>>>>>> 82e6b553d64c6d85499d25468c38b5a0740a319d
/////////////////////////// END ROUTE LANDING PAGE /////////////////////
