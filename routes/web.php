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
use App\Http\Controllers\Landing\CartController as LandingCartController;

// Admin
use App\Http\Controllers\Admin\Logincontroller as AdminLogincontroller;
use App\Http\Controllers\Admin\KategoriController as AdminKategoriController;
use App\Http\Controllers\Admin\DatawilayahController as AdminDatawilayahController;
use App\Http\Controllers\Admin\MerekController as AdminMerekController;
use App\Http\Controllers\Admin\ProdukController as AdminProdukController;
use App\Http\Controllers\Admin\blogadmin;
use App\Http\Controllers\Landing\BlogController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\Admin\PromosiController as AdminPromosiController;
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
Route::post('/loginpost', [LandingLogincontroller::class, 'loginpost'])->name('loginpost');

//register
Route::get('/register', [LandingLogincontroller::class, 'register'])->name('register');
Route::post('/registerpost', [LandingLogincontroller::class, 'registerpost'])->name('registerpost');
//logout
Route::get('/logout', [LandingLogincontroller::class, 'logout'])->name('logout');
// berandah admin
Route::get('/beranda', function () {
    return view('dashboardadmin.beranda');
});

//pruduk
Route::get('/produk', [LandingProdukController::class, 'produk'])->name('produk');
Route::get('/detail/{id}', [LandingProdukController::class, 'detail'])->name('detail');
Route::get('/detailmodal/{id}', [LandingProdukController::class, 'detailmodal'])->name('detailmodal');

//cart
Route::get('/cart', [LandingCartController::class, 'keranjang'])->name('keranjang')->middleware('auth');
Route::get('/hapuscart/{id}', [LandingCartController::class, 'hapuscart'])->name('hapuscart');
Route::post('/cartpost/{id}', [LandingCartController::class, 'cartpost'])->name('cartpost');
Route::post('/postcart', [LandingCartController::class, 'postcart'])->name('postcart');


// Blog
Route::get('/blogg', [LandingBlogController::class, 'blog']);
Route::get('/detailblog/{id}', [LandingBlogController::class, 'detailblog']);

// promo
Route::get('/promo', [LandingPromoController::class, 'promo']);


Route::get('/test', function () {
    return view('landingpage.testsofyan');
});

Route::get('/', [LandingpageController::class, 'home'])->name('home');

////////CHECKOUT
Route::get('/checkout', [LandingpageController::class, 'checkout'])->name('checkout');

//Kategori
Route::get('/kategori-landing', [LandingKategoriController::class, 'index'])->name('index.kategori');
Route::get('/categories', [LandingKategoriController::class, 'index'])->name('index.kategori');


//user profile
Route::get('/user-profile', [LandingUserprofilecontroller::class, 'index'])->name('user-profle');
Route::get('/change-password', [LandingUserprofilecontroller::class, 'change_password'])->name('change_password');
Route::post('/postchange-password', [LandingUserprofilecontroller::class, 'postchange_password'])->name('postchange_password');
    //edit profile
Route::post('/edit-profile/{id}', [LandingUserprofilecontroller::class, 'edit_profile'])->name('edit-profile');
//get address
Route::post('/getkabupaten', [LandingUserprofilecontroller::class, 'getkabupaten'])->name('getkabupaten');
Route::post('/getkecamatan', [LandingUserprofilecontroller::class, 'getkecamatan'])->name('getkecamatan');
Route::get('/history', [LandingUserprofilecontroller::class, 'history'])->name('history');

//Trackorder
Route::get('/trackorder', [LandingTrackorderController::class, 'indextrack'])->name('trackorder');

// daftar keinginan (whislist)
Route::get('/wishlist', [LandingWhislistController::class, 'daftarkeinginan'])->name('wishlist');

/////////////////////////// END ROUTE LANDING PAGE /////////////////////

// Star Login Admin
Route::get('/loginadmin', [AdminLogincontroller::class, 'login'])->name('login');

// End Login Admin

// Star kategroi Admin

//Kategori
Route::get('/kategori', [AdminKategoriController::class, 'halamankategori'])->name('kategori');
Route::get('/create', [AdminKategoriController::class, 'create'])->name('create');
Route::get('/store', [AdminKategoriController::class, 'store'])->name('store');
Route::get('/tampilkandata', [AdminKategoriController::class, 'tampilkandata'])->name('tampilkandata');
Route::get('/show/{id}', [AdminKategoriController::class, 'show'])->name('show');
Route::get('/update/{id}', [AdminKategoriController::class, 'update'])->name('update');
Route::get('/destroy/{id}', [AdminKategoriController::class, 'destroy'])->name('destroy');
// Route::post('/_validation', [AdminKategoriController::class, '_validation'])->name('_validation');



Route::post('/kategoripost', [AdminKategoriController::class, 'kategoripost'])->name('kategoripost');
Route::post('/editkategoripost/{id}', [AdminKategoriController::class, 'editkategoripost'])->name('editkategoripost');
Route::get('/deletekategori/{id}', [AdminKategoriController::class, 'deletekategori'])->name('deletekategori');
Route::post('/_validation', [AdminKategoriController::class, '_validation'])->name('_validation');
    //SubKategori
Route::get('/subkategori', [AdminKategoriController::class, 'subkategori'])->name('subkategori');
Route::post('/subkategoripost', [AdminKategoriController::class, 'sub_kategoripost'])->name('subkategoripost');
Route::post('/editsub_kategoripost/{id}', [AdminKategoriController::class, 'editsub_kategoripost'])->name('editsub_kategoripost');
Route::get('/deletesubkategori/{id}', [AdminKategoriController::class, 'deletesubkategori'])->name('deletesubkategori');
    //Sub_Subkategori
Route::get('/sub_subkategori', [AdminKategoriController::class, 'sub_subkategori'])->name('sub_subkategori');
Route::post('/sub_subkategoripost', [AdminKategoriController::class, 'sub_subkategoripost'])->name('sub_subkategoripost');
Route::post('/updatesub_subkategori/{id}', [AdminKategoriController::class, 'updatesub_subkategori'])->name('updatesub_subkategori');
Route::get('/deletesub_sub/{id}', [AdminKategoriController::class, 'deletesub_sub'])->name('deletesub_sub');

// End Kategori Admin

//start data wilayah
//provinsi
Route::get('/datawilayahprovinsi', [AdminDatawilayahController::class, 'datawilayahprovinsi'])->name('datawilayahprovinsi');
Route::get('/createprovinsi', [AdminDatawilayahController::class, 'create'])->name('create');
//insert & edit & delete provinsi
Route::post('/insertprovinsi', [AdminDatawilayahController::class, 'insertprovinsi'])->name('insertprovinsi');
Route::post('/editprovinsi/{id}', [AdminDatawilayahController::class, 'editprovinsi'])->name('editprovinsi');
Route::get('/deleteprovinsi/{id}', [AdminDatawilayahController::class, 'deleteprovinsi'])->name('deleteprovinsi');
//kabupaten
Route::get('/datawilayahkabupaten', [AdminDatawilayahController::class, 'datawilayahkabupaten'])->name('datawilayahkabupaten');
//insert & edit & delete kabupaten
Route::post('/insertkabupaten', [AdminDatawilayahController::class, 'insertkabupaten'])->name('insertkabupaten');
Route::post('/editkabupaten/{id}', [AdminDatawilayahController::class, 'editkabupaten'])->name('editkabupaten');
Route::get('/deletekabupaten/{id}', [AdminDatawilayahController::class, 'deletekabupaten'])->name('deletekabupaten');
//kecamatan
Route::get('/datawilayahkecamatan', [AdminDatawilayahController::class, 'datawilayahkecamatan'])->name('datawilayahkecamatan');
//insert & edit & delete kecamatan
Route::post('/insertkecamatan', [AdminDatawilayahController::class, 'insertkecamatan'])->name('insertkecamatan');
Route::post('/editkecamatan/{id}', [AdminDatawilayahController::class, 'editkecamatan'])->name('editkecamatan');
Route::get('/deletekecamatan/{id}', [AdminDatawilayahController::class, 'deletekecamatan'])->name('deletekecamatan');
//end data wilayah

//start add Produk
Route::get('/produkadmin', [AdminProdukController::class, 'index'])->name('produkadmin');
Route::get('/addproduk', [AdminProdukController::class, 'addproduct'])->name('addproduk');
Route::post('/get_subkategori', [AdminProdukController::class, 'get_subkategori'])->name('get_subkategori');
Route::post('/get_sub_subkategori', [AdminProdukController::class, 'get_sub_subkategori'])->name('get_sub_subkategori');
Route::post('/insertproduk', [AdminProdukController::class, 'insertproduk'])->name('insertproduk');
Route::get('/view_produk/{id}', [AdminProdukController::class, 'view_produk'])->name('view_produk');
Route::post('/editgaleri_produk/{id}/{key}', [AdminProdukController::class, 'editgaleri_produk'])->name('editgaleri_produk');
Route::post('/edit_produk/{id}', [AdminProdukController::class, 'edit_produk'])->name('edit_produk');
Route::get('/delete_produk/{id}', [AdminProdukController::class, 'delete_produk'])->name('delete_produk');
//end add Produk

//start data merek
Route::get('/merek', [AdminMerekController::class, 'index'])->name('merek');
Route::post('/merekpost', [AdminMerekController::class, 'merekpost'])->name('merekpost');
Route::post('/editmerekpost/{id}', [AdminMerekController::class, 'edit'])->name('editmerekpost');
Route::get('/deletemerek/{id}', [AdminMerekController::class, 'delete'])->name('deletemerek');
//end data merek

////////Sliders
Route::get('/sliderr', [SliderController::class, 'slider'])->name('slider');
Route::post('/updateslider/{id}', [SliderController::class, 'updateslider']);


//////////
Route::get('/blogadmin', [blogadmin::class, 'blogg'])->name('blogg');
Route::get('/tambahblog', [blogadmin::class, 'tambahblog'])->name('tambahblog');
Route::get('/editblog/{id}', [blogadmin::class, 'editblog'])->name('editblog');
Route::post('/insertblog', [blogadmin::class, 'insertblog'])->name('insertblog');
Route::post('/updateblog/{id}', [blogadmin::class, 'updateblog'])->name('updateblog');
Route::get('/deleteblog/{id}', [blogadmin::class, 'deleteblog'])->name('deleteblog');

// End Sliders

// Start Promosi
Route::get('/promosi', [AdminPromosiController::class, 'promosi'])->name('promosi');


Route::post('/editpromopost/{id}', [AdminPromosiController::class, 'edit'])->name('editpromopost');

Route::get('/bannerpromosi', [AdminPromosiController::class, 'bannerpromosi'])->name('bannerpromosi');


Route::post('/editbannerpromopost/{id}', [AdminPromosiController::class, 'editbanner'])->name('editbannerpromopost');

//End Promosi
