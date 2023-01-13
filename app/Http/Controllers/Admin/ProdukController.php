<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Merek;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::get();
        return view('dashboardadmin.produk.produk',compact('data'));
    }
    public function addproduct()
    {
        $merk = Merek::all();
        // dd($merk);
        return view('dashboardadmin.produk.tambahproduk',compact('merk'));
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
        // dd($request->all());
        $model = new Produk();
        $model->merk_produk = $request->merk_produk;
        $model->nama_produk = $request->nama_produk;
        $model->ukuran_produk = implode(',',$request->ukuran_produk);
        $model->warna_produk = implode(',',$request->warna_produk);
        $model->berat_produk = $request->berat_produk;
        $model->kategori = $request->kategori;
        $model->sub_kategori = $request->sub_kategori;
        $model->sub_subkategori = $request->sub_subkategori;
        $model->stok_produk = $request->stok_produk;
        $model->harga_diskonproduk = (($request->harga_asliproduk*$request->diskon)/100);
        $model->harga_asliproduk = $request->harga_asliproduk;
        $model->diskon = $request->diskon;
        $model->galeri_produk = implode(',',$files);
        $model->status_produk = implode(',',$request->status_produk);
        $model->deskirpsi_pendek = $request->deskirpsi_pendek;
        $model->deskirpsi_panjang = $request->deskirpsi_panjang;
        $model->status = $request->status;
        $model->save();
        // dd($model->harga_diskonproduk);
        return redirect('/produkadmin')->with('success','Data Berhasil Dihapus');
    }
}
