<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\kategori;
use App\Models\Merek;
use App\Models\Sub_Subkategori;
use App\Models\subkategori;

class ProdukController extends Controller
{
    public function index()
    {
        $data = Produk::get();
        // dd($data);
        return view('dashboardadmin.produk.produk',compact('data'));
    }
    public function addproduct()
    {
        $merk = Merek::all();
        // dd($merk);
        $kategori = kategori::orderBy('kategori','asc')->get();
        return view('dashboardadmin.produk.tambahproduk',compact('merk','kategori'));
    }
    public function get_subkategori(Request $request){
        $ik = $request->post('ik');
        $subkategori = subkategori::where('kategori',$ik)->orderBy('sub_kategori','asc')->get();
        $html = '<option value="">-- Select --</option>';
        // dd($subkategori);
        foreach($subkategori as $row){
            $html.= '<option value="'.$row->id.'">'.$row->sub_kategori.'</option>';
        }
        echo $html;
    }
    public function get_sub_subkategori(Request $request){
        $isk = $request->post('isk');
        $sub_subkategori = Sub_Subkategori::where('sub_kategori',$isk)->orderBy('sub_subkategori','asc')->get();
        $html = '<option value="">-- Select --</option>';
        // dd($sub_subkategori);
        foreach($sub_subkategori as $row){
            $html.= '<option value="'.$row->id.'">'.$row->sub_subkategori.'</option>';
        }
        echo $html;
    }
    public function insertproduk(Request $request){
        // $tes = json_decode($request->ukuran_produk,true);
        // $single = array_column($tes,'value');
        // dd($single);
        $files = [];
        if ($request->hasfile('galeri_produk')) {
            foreach ($request->galeri_produk as $file) {
                $name = $file->getClientOriginalName();
                $file->move(public_path('fotoproduk'), $name);
                $files[] = $name;
            }
        }
        // dd($request->ukuran_produk);
        $model = new Produk();
        $model->merk_produk = $request->merk_produk;
        $model->nama_produk = $request->nama_produk;
        $ukuran = json_decode($request->ukuran_produk,true);
        $insukuran = array_column($ukuran,'value');
        $model->ukuran_produk = implode(',',$insukuran);
        $warna = json_decode($request->warna_produk,true);
        $inswarna = array_column($warna,'value');
        $model->warna_produk = implode(',',$inswarna);
        $model->berat_produk = $request->berat_produk;
        $model->kategori = $request->kategori;
        $model->sub_kategori = $request->sub_kategori;
        $model->sub_subkategori = $request->sub_subkategori;
        $model->stok_produk = $request->stok_produk;
        $model->harga_diskonproduk = $request->harga_diskonproduk; //- (($request->harga_asliproduk*$request->diskon)/100);
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
    public function view_produk($id){
        $produk = Produk::with('rproduktmerk','rkategoritkategori','rsub_kategoritkategori','rsub_subkategoritkategori')->findorfail($id);
        $merk = Merek::all();
        $kategori = kategori::all();
        return view('dashboardadmin.produk.view_porduk',compact('produk','merk','kategori'));
    }
}
