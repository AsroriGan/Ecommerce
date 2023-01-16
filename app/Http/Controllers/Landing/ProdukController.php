<?php

namespace App\Http\Controllers\Landing;

use App\Models\Produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function produk()
    {
        $data = Produk::get();
        return view('landingpage.produk.produk',compact('data'));
    }
    public function detail($id)
    {
        $data = Produk::findOrFail($id);
        $galeri_produk = explode(',',$data->galeri_produk);
        $ukuran_produk = explode(',',$data->ukuran_produk);
        $warna_produk = explode(',',$data->warna_produk);
        return view('landingpage.produk.detail',compact('data','galeri_produk','ukuran_produk','warna_produk'));
    }
     public function keranjang()
    {
        return view('landingpage.keranjang.keranjang');
    }


    //admin

}
