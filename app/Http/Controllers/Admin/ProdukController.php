<?php

namespace App\Http\Controllers\Admin;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\kategori;
use App\Models\Merek;
use App\Models\Sub_Subkategori;
use App\Models\subkategori;
use App\Models\Variant;

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
        // dd($request->all());
        $this->validate($request, [
            'merk_produk' => 'required',
            'nama_produk' => 'required',
            // 'ukuran_produk' => 'required',
            // 'warna_produk' => 'required',
            'berat_produk' => 'required',
            'kategori' => 'required',
            // 'sub_kategori' => 'required',
            // 'sub_subkategori' => 'required',
            // 'stok_produk' => 'required',
            'harga_asliproduk' => 'required',
            'diskon' => 'required',
            'harga_diskonproduk' => 'required',
            'deskirpsi_pendek' => 'required',
            'deskirpsi_panjang' => 'required',
            'galeri_produk' => 'required',
            // 'promo' => 'required',
            // 'produk_baru' => 'required',
            // 'baru_datang' => 'required',
            // 'best_seller' => 'required',
        ]);

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
        // $ukuran = json_decode($request->ukuran_produk,true);
        // $insukuran = array_column($ukuran,'value');
        // $model->ukuran_produk = implode(',',$insukuran);
        // $warna = json_decode($request->warna_produk,true);
        // $inswarna = array_column($warna,'value');
        // $model->warna_produk = implode(',',$inswarna);
        $model->berat_produk = $request->berat_produk;
        $model->kategori = $request->kategori;
        $model->sub_kategori = $request->sub_kategori;
        $model->sub_subkategori = $request->sub_subkategori;
        // $model->stok_produk = $request->stok_produk;
        $model->harga_diskonproduk = $request->harga_diskonproduk; //- (($request->harga_asliproduk*$request->diskon)/100);
        $model->harga_asliproduk = $request->harga_asliproduk;
        $model->diskon = $request->diskon;
        $model->galeri_produk = implode(',',$files);
        $model->deskirpsi_pendek = $request->deskirpsi_pendek;
        $model->deskirpsi_panjang = $request->deskirpsi_panjang;
        $model->status = 'aktif';
        $model->Promo = $request->promo;
        $model->Produk_Baru = $request->produk_baru;
        $model->Baru_Datang = $request->baru_datang;
        $model->Best_Seller = $request->best_seller;
        $model->save();
        // dd($model->harga_diskonproduk);
        return redirect('/produkadmin')->with('success','Data Berhasil Ditambahkan');
    }
    public function view_produk($id){
        $produk = Produk::with('rproduktmerk','rkategoritkategori','rsub_kategoritkategori','rsub_subkategoritkategori')->findorfail($id);
        $merk = Merek::all();
        $kategori = kategori::all();
        $galeri_produk = explode(',',$produk->galeri_produk);
        // dd($galeri_produk);
        $keygaleri = array_keys($galeri_produk);
        // dd($keygaleri);
        return view('dashboardadmin.produk.view_porduk',compact('produk','merk','kategori','galeri_produk','keygaleri'));
    }
    public function editgaleri_produk(Request $request,$id,$key){
        $produk = produk::findorfail($id);
        if ($request->hasFile('galeri_produk')) {
            $request->file('galeri_produk')->move('fotoproduk/', $request->file('galeri_produk')->getClientOriginalName());
            $namefoto_update = $request->file('galeri_produk')->getClientOriginalName();
            $galeri_produk = explode(',',$produk->galeri_produk);
            $galeri_produk[$key] = $namefoto_update;
            $produk->galeri_produk = implode(',',$galeri_produk);
            $produk->save();
            return redirect('/view_produk/'.$id)->with('success','Salah satu foto di galeri produk berhasil di update');
        }
    }
    public function edit_produk(Request $request,$id){
        $model = Produk::findorfail($id);
        $model->merk_produk = $request->merk_produk;
        $model->nama_produk = $request->nama_produk;
        // $ukuran = json_decode($request->ukuran_produk,true);
        // $insukuran = array_column($ukuran,'value');
        // $model->ukuran_produk = implode(',',$insukuran);
        // $warna = json_decode($request->warna_produk,true);
        // $inswarna = array_column($warna,'value');
        // $model->warna_produk = implode(',',$inswarna);
        $model->berat_produk = $request->berat_produk;
        $model->kategori = $request->kategori;
        $model->sub_kategori = $request->sub_kategori;
        $model->sub_subkategori = $request->sub_subkategori;
        // $model->stok_produk = $request->stok_produk;
        $model->harga_diskonproduk = $request->harga_diskonproduk; //- (($request->harga_asliproduk*$request->diskon)/100);
        $model->harga_asliproduk = $request->harga_asliproduk;
        $model->diskon = $request->diskon;
        $model->deskirpsi_pendek = $request->deskirpsi_pendek;
        $model->deskirpsi_panjang = $request->deskirpsi_panjang;
        $model->status = $request->status;
        $model->Promo = $request->promo;
        $model->Produk_Baru = $request->Produk_Baru;
        $model->Baru_Datang = $request->Baru_Datang;
        $model->Best_Seller = $request->Best_Seller;
        $model->save();
        return redirect('/produkadmin')->with('success','Data Berhasil Di edit');
    }
    public function delete_produk($id){
        $data = Produk::findorfail($id);
        $data->delete();
        return redirect('/produkadmin')->with("success","Data berhasil Dihapus");
    }


    //Variant
    public function variant($id){
        // $data = Produk::findorfail($id);
        $data = Variant::where('produk_id',$id)->get();
        // dd($data);
        $produk = Produk::find($id);
        return view('dashboardadmin.produk.variant.variant',compact('data','produk'));
    }
     public function tambahvariant(Request $request,$id){
          $this->validate($request, [
            'harga' => 'required',
            'ukuran' => 'required',
            'warna' => 'required',
        ]);

        $model = new Variant();
        $model->produk_id = $id;
        $model->warna_produk = $request->warna;
        $model->ukuran_produk = $request->ukuran;
        $model->harga_produk = $request->harga;
        $model->stok_produk = $request->stok;
        $model->save();
        return redirect()->back()->with('success','Data Berhasil Ditambahkan');
    }
     public function editvariant($id){
        $detail= Variant::findOrFail($id);

         return response()->json([
            'data' => $detail,
        ]);

     }
     public function editvariantprost(Request $request){
        $id = $request->idvariant;
        $model = Variant::findorfail($id);
        $model->warna_produk = $request->warna;
        $model->ukuran_produk = $request->ukuran;
        $model->harga_produk = $request->harga;
        $model->stok_produk = $request->stok;
        $model->save();
        return redirect()->back()->with('success','Data Berhasil Di edit');
    }
    public function delete_variant($id){
        $data = Variant::findorfail($id);
        $data->delete();
        return redirect()->back()->with("success","Data berhasil Dihapus");
    }


}
