<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::get();
        return view('dashboardadmin.produk.produk',compact('data'));
    }
    public function addproduct()
    {
        return view('dashboardadmin.produk.tambahproduk');
    }
    public function insertproduk(Request $request){
        $files = [];
        if ($request->hasfile('galeri_produk')) {
            foreach ($request->galeri_produk as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('fotoproduk'), $name);
                $files[] = $name;
            }
        }
        // dd($files);
        $model = new Produk();
        $model->merk_produk = $request->merk_produk;
        $model->nama_produk = $request->nama_produk;
        $model->ukuran_produk = json_encode($request->ukuran_produk);
        $model->warna_produk = json_encode($request->warna_produk);
        $model->merk_produk = $request->merk_produk;
        $model->merk_produk = $request->merk_produk;
        $model->save();
    }
}
