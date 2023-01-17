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
    public function detailmodal($id){
        $detail= Produk::findOrFail($id);
        $warna_produk = explode(',',$detail->warna_produk);
        $ukuran_produk = explode(',',$detail->ukuran_produk);
        $tes = explode(',',$detail->galeri_produk);
        $tes2 = $tes[0];
        $galeri_produk = explode(',',$tes2);
        return response()->json([
            'data' => $detail,
            'warna' => $warna_produk,
            'ukuran' => $ukuran_produk,
            'galeri' => $galeri_produk
        ]);
    }


    //admin

}
