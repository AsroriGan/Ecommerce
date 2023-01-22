<?php


namespace App\Http\Controllers\Landing;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;
use Cart;

class CartController extends Controller
{
     public function keranjang()
    {
        $userId = auth()->user()->id;
        $data =  Cart::session($userId)->getContent();
        $subtotal = \Cart::getSubTotal();
        return view('landingpage.keranjang.keranjang',compact('data','subtotal'));
    }

    public function cartpost(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        // dd($produk);
        $getfoto = explode(',', $produk->galeri_produk);
        $fotoproduk = $getfoto[0];
        // dd($fotoproduk);
        $hargatotal = $produk->harga_diskonproduk * $request->jumlah;
        // dd($hargatotal);
        if($request->jumlah > $produk->stok_produk) {
            return redirect()->back()->with('error','');
        } else {
           $iduser = auth()->user()->id;
            Cart::session($iduser)->add(array(
                'id' => $produk->id,
                'name' => $produk->nama_produk,
                'price' => $produk->harga_diskonproduk,
                'quantity' => $request->jumlah,
                'attributes' => array(
                'warna' => $request->warna,
                'ukuran' => $request->ukuran,
                'foto' => $fotoproduk,
                'hargatotal' => $hargatotal,
                )

            ));
            return redirect()->back()->with('success','Berhasil Menambahkan Produk Ke Keranjanh');
        }
    }
     public function hapuscart($id){
        $iduser = auth()->user()->id;
        \Cart::session($iduser)->remove($id);
        return redirect()->back()->with('success','berhasil menghapus');
    }

    public function postcart(Request $request)
    {
        // dd($request->all());
        $produk = Produk::where('id',$request->id)->first();
        // dd($produk);
        $getfoto = explode(',', $produk->galeri_produk);
        $fotoproduk = $getfoto[0];
        // dd($fotoproduk);
        $hargatotal = $produk->harga_diskonproduk * $request->jumlah;
        // dd($hargatotal);
        if($request->jumlah > $produk->stok_produk) {
            return redirect()->back()->with('error','');
        } else {
           $iduser = auth()->user()->id;
            Cart::session($iduser)->add(array(
                'id' => $produk->id,
                'name' => $produk->nama_produk,
                'price' => $produk->harga_diskonproduk,
                'quantity' => $request->jumlah,
                'attributes' => array(
                'warna' => $request->warna,
                'ukuran' => $request->ukuran,
                'foto' => $fotoproduk,
                'hargatotal' => $hargatotal,
                )

            ));
            return redirect()->back()->with('success','Berhasil Menambahkan Produk Ke Keranjanh');
        }
    }

}
