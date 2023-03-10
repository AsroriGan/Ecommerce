<?php

namespace App\Http\Controllers\Landing;

use App\Models\Produk;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Variant;

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
        $datas = Variant::orderBy('ukuran_produk','asc')->where('produk_id',$id)->get();
        $bestseller = Produk::where('Best_Seller','yes')->paginate(5);
        $galeri_produk = explode(',',$data->galeri_produk);
        // $ukuran_produk = explode(',',$data->ukuran_produk);
        // $warna_produk = explode(',',$data->warna_produk);
        return view('landingpage.produk.detail',compact('data','galeri_produk','datas','bestseller'));
    }
    public function detailmodal($id){
        $detail= Produk::findOrFail($id);
        $variant = Variant::where('produk_id',$id)->get();

        $tes = explode(',',$detail->galeri_produk);
        $tes2 = $tes[0];
        $galeri_produk = explode(',',$tes2);
        // dd($variant);
        return response()->json([
            'data' => $detail,
            'galeri' => $galeri_produk,
            'datas' => $variant,
        ]);
    }

    public function get_warna(Request $request){
        $ik = $request->post('ik');
        // dd($ik);
        $id = $request->post('id');
        $subkategori = Variant::where('produk_id',$id)->where('ukuran_produk',$ik)->orderBy('warna_produk','asc')->get();
        // dd( $subkategori);
        $html = '<option value="">-- Select --</option>';
        // dd($subkategori);
        foreach($subkategori as $row){
            $html.= '<option value="'.$row->warna_produk.'">'.$row->warna_produk.'</option>';
        }
        echo $html;
    }
    public function get_price(Request $request){
        $ik = $request->post('ik');
        // dd($ik);
        $id = $request->post('id');
        $il = $request->post('il');
        $subkategori = Variant::where('produk_id',$id)->where('ukuran_produk',$il)->where('warna_produk',$ik)->first();
        // dd( $subkategori);
        return response()->json([ 'data' => $subkategori]);
    }


    //admin

}
