<?php

namespace App\Http\Controllers\Landing;

use App\Models\Produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produk()
    {
        return view('landingpage.produk.produk');
    }
    public function detail()
    {
        return view('landingpage.produk.detail');
    }
     public function keranjang()
    {
        return view('landingpage.keranjang.keranjang');
    }


    //admin
    public function product()
    {
        $data = Produk::get();
        return view('dashboardadmin.produk.produk',compact('data'));
    }
    public function tambahproduct()
    {
        return view('dashboardadmin.produk.tambahproduk');
    }
}
