<?php
// Landing
use App\Http\Controllers\Landing\KategoriController as LandingKategoriController;
use App\Http\Controllers\Landing\Logincontroller as LandingLogincontroller;
use App\Http\Controllers\Landing\LandingpageController;
use App\Http\Controllers\Landing\BlogController as LandingBlogController;
use App\Http\Controllers\Landing\PromoController as LandingPromoController;
use App\Http\Controllers\Landing\ProdukController as LandingProdukController;
use App\Http\Controllers\Landing\Userprofilecontroller as LandingUserprofilecontroller;
use App\Http\Controllers\Landing\TrackorderController as LandingTrackorderController;
use App\Http\Controllers\Landing\WhislistController as LandingWhislistController;

// Admin
use App\Http\Controllers\Admin\KategoriController as AdminKategoriController;
use App\Http\Controllers\Admin\DatawilayahController as AdminDatawilayahController;
use App\Http\Controllers\SliderController;
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
Route::get('/login', [LandingLogincontroller::class, 'login'])->name('login');

//register
Route::get('/register', [LandingLogincontroller::class, 'register'])->name('register');

// berandah admin
Route::get('/beranda', function () {
    return view('dashboardadmin.beranda');
});

//pruduk
Route::get('/produk', [LandingProdukController::class, 'produk'])->name('produk');
Route::get('/detail', [LandingProdukController::class, 'detail'])->name('detail');
Route::get('/cart', [LandingProdukController::class, 'keranjang'])->name('keranjang');
Route::get('/product', [LandingProdukController::class, 'product'])->name('product');

// Blog
Route::get('/blog', [LandingBlogController::class, 'blog']);
Route::get('/detailblog', [LandingBlogController::class, 'detailblog']);

// promo
Route::get('/promo', [LandingPromoController::class, 'promo']);


Route::get('/test', function () {
    return view('landingpage.testsofyan');
});

Route::get('/', [LandingpageController::class, 'home'])->name('home');

////////CHECKOUT
Route::get('/checkout', [LandingpageController::class, 'checkout'])->name('checkout');

//Kategori
Route::get('/kategori', [LandingKategoriController::class, 'index'])->name('index.kategori');

//user profile
Route::get('/user-profile',[LandingUserprofilecontroller::class,'index'])->name('user-profle');
Route::get('/history',[LandingUserprofilecontroller::class,'history'])->name('history');

//Trackorder
Route::get('/trackorder', [LandingTrackorderController::class, 'indextrack'])->name('trackorder');

// daftar keinginan (whislist)
Route::get('/wishlist', [LandingWhislistController::class, 'daftarkeinginan'])->name('wishlist');

/////////////////////////// END ROUTE LANDING PAGE /////////////////////

// kategroi Admin
Route::get('/kategori', [AdminKategoriController::class, 'kategori'])->name('kategori');
Route::post('/kategoripost', [AdminKategoriController::class, 'kategoripost'])->name('kategoripost');

//start data wilayah
    //provinsi
Route::get('/datawilayahprovinsi', [AdminDatawilayahController::class, 'datawilayahprovinsi'])->name('datawilayahprovinsi');
    //insert provinsi
Route::post('/insertprovinsi', [AdminDatawilayahController::class, 'insertprovinsi'])->name('insertprovinsi');
    //kabupaten
Route::get('/datawilayahkabupaten', [AdminDatawilayahController::class, 'datawilayahkabupaten'])->name('datawilayahkabupaten');
Route::post('/insertprovinsi', [AdminDatawilayahController::class, 'insertprovinsi'])->name('insertprovinsi');
//end data wilayah
////////Sliders
Route::get('/slider', [SliderController::class, 'slider'])->name('slider');
